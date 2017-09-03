<!DOCTYPE>
<html lang="ru">
<head>
    <title>Задание5</title>
    <meta charset="utf-8">
</head>
<?php
$content = file_get_contents(__DIR__ . '/numbers_book11');
$data = json_decode($content, true);
?>
<body>
<table>
    <tr>
        <td><?= "firstName" ?></td>
        <td><?= $data["firstName"] ?></td>
    </tr>
    <tr>
        <td><?= "secondName" ?></td>
        <td><?= $data["secondName"] ?></td>
    </tr>
    <tr>
        <td><?= "patronymic" ?></td>
        <td><?= $data["patronymic"] ?></td>
    </tr>
    <tr>
        <td><?= "city" ?></td>
        <td><?= $data["city"] ?></td>
    </tr>
    <tr>
        <td><?= "street" ?></td>
        <td><?= $data["street"] ?></td>
    </tr>
    <tr>
        <td><?= "house" ?></td>
        <td><?= $data["house"] ?></td>
    </tr>
    <tr>
        <td><?= "phoneNumber1" ?></td>
        <td><?= $data["phoneNumber1"] ?></td>
    </tr>
    <tr>
        <td><?= "phoneNumber2" ?></td>
        <td><?= $data["phoneNumber2"] ?></td>
    </tr>
</table>
</body>
</html>