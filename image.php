<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳圖案機制
 * 3.取得圖檔資源
 * 4.進行圖形處理
 *   ->圖形縮放
 *   ->圖形加邊框
 *   ->圖形驗證碼
 * 5.輸出檔案
 */

// 拿到圖片 
// 圖片複製不同大小因應不同環境使用 
// 使用imagecopyresampled() dst=destination 解釋:重新取樣 有來源與目標
// Resample: photoshop 開新檔案
// ):bool 意味著無回傳值，是為物件導向的實例


if(!empty($_FILES['img']['tmp_name'])){
    $file="re_".$_FILES['name']['img'];
    move_uploaded_file($_FILES['img']['image'],"./img/".$file);
    $percent=0.5;

    list($width,$height)=getimagesize("./img".$file);
    list($new_width,$new_height)=[$width*$percent,$height*$percent];

    $src_image=imagecreatefromjpeg("./img/".$file);
    $dst_image=imagecreatetruecolor($new_width,$new_height);

    imagecopyresampled($dst_image,$src_image,0,0,0,0,$new_width,$new_height,$width,$height);
    imagejpeg($dst_image,"./img/small_".$file);
}

?>

<h1 class="header">圖形處理練習</h1>
<!---建立檔案上傳機制--->

<h1 class="header">重新上傳</h1>
 <!----建立你的表單及設定編碼----->
<form action="./api/update.php" method="post" enctype="multipart/form-data">
<div>
    上傳檔案: <input type="file" name="img" id="img">
</div>

<div>

    <input type="hidden" name="id" value="<?=$img['id'];?>">
    <input type="submit" value="上傳">
</div>

</form>
<img src="../img/<?=$img['img'];?>" alt="">

<!----縮放圖形----->


<!----圖形加邊框----->


<!----產生圖形驗證碼----->



</body>
</html>