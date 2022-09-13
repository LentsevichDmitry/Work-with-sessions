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
<form action="session.php" method="POST">
    <table border="1">
        <tr>
            <td>Материнская плата</td>
            <th><input type="text" name="motherboard" value="<?= $_SESSION['motherboard']?>"></th>
        </tr>
        <tr>
            <td>Процессор</td>
            <th><input type="text" name="cpu" value="<?= $_SESSION['CPU']?>"></th>
        </tr>
        <tr>
            <td>Оперативная память</td>
            <th><input type="text" name="ram" value="<?= $_SESSION['RAM']?>"></th>
        </tr>
        <tr>
            <td>Видеокарта</td>
            <th><input type="text" name="gpu" value="<?= $_SESSION['GPU']?>"></th>
        </tr>
        <tr>
            <td>SSD</td>
            <th><input type="text" name="ssd" value="<?= $_SESSION['SSD']?>"></th>
        </tr>
        <tr>
            <td>Блок питания</td>
            <th><input type="text" name="pu" value="<?= $_SESSION['PU']?>"></th>
        </tr>
        <tr>
            <td>Оформить заказ</td>
            <th><input type="submit" value="Submit"></th>
        </tr>
    </table>
</form>
</body>
</html>