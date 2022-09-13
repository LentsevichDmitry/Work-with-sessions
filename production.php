<?php
session_start();
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
<table border="2" bgcolor="green">
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
</table>
<?php
unset($_SESSION['PU'], $_SESSION['SSD'], $_SESSION['GPU'], $_SESSION['CPU'], $_SESSION['RAM'],
$_SESSION['motherboard']);

var_dump($_SESSION);
?>

</body>
</html>
