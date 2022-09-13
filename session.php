<?php
    session_start();
    $_SESSION['motherboard'] = $_POST['motherboard'];
    $_SESSION['CPU'] = $_POST['cpu'];
    $_SESSION['RAM'] = $_POST['ram'];
    $_SESSION['GPU'] = $_POST['gpu'];
    $_SESSION['SSD'] = $_POST['ssd'];
    $_SESSION['PU'] = $_POST['pu'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="production.php">
    <table border="1">
        <caption>Предварительный просмотр заказа</caption>
        <tr>
            <td>Материнская плата</td>
            <th><?=$_SESSION['motherboard']?></th>
        </tr>
        <tr>
            <td>Процессор</td>
            <th><?=$_SESSION['CPU']?></th>
        </tr>
        <tr>
            <td>Оперативная память</td>
            <th><?=$_SESSION['RAM']?></th>
        </tr>
        <tr>
            <td>Видеокарта</td>
            <th><?=$_SESSION['GPU']?></th>
        </tr>
        <tr>
            <td>SSD</td>
            <th><?=$_SESSION['SSD']?></th>
        </tr>
        <tr>
            <td>Блок питания</td>
            <th><?=$_SESSION['PU']?></th>
        </tr>
        <tr>
            <td><a href="index.php">Редактировать заказ</a></td>
            <th><input type="submit" value="Submit"></th>
        </tr>
    </table>
</form>
</body>
</html>
