
<?php include_once"DB.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Factory</title>
</head>
<body>

<h1>觀光工廠名單</h1>
<table>
    <tr>
        <td> <input type="checkbox" class='select-all'></td>
        <td>全選</td>
        <td>序號</td>
        <td>地區</td>
        <td>縣市</td>
        <td>名稱</td>
        <td>電話</td>
        <td>地址</td>
        <td>網址</td>
    </tr>
    <?php
    $factory=$db->all();
    foreach(

    );


    ?>

</table>
    <!-- 建好後在phpmyadmin讀入觀光工廠的 -->

</body>
</html>
<script>
    $(".select-all").on();
    $(".select-all").on(); 
    $(".select-all").on(); 
    $(".select-all").on();
    $(".select-all").on();


</script>
<!-- jquery CDN  for checkbox-->
<!-- 測試:極限測試-script 選擇  -->
<!-- php myadmin入表格還是?? 正解:在db.php內建好save要用的函式->並new DB $db=new DB('factory');->回到db.php修改dsn db name -->
<!-- javascript的陣列= obj  -->
<!-- 前台後台分開  -->
