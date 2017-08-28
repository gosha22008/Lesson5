<!DOCTYPE>
<html lang="ru">
<head>
    <title>Задание5</title>
    <meta charset="utf-8">
</head>
<?php
$content = file_get_contents(__DIR__ . '/numbers_book');
$data = json_decode($content, true);
?>
<body>
<table>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефоны</td>
    </tr>
    <tr>
        <td><?= $data['firstName'] ?></td>
        <td><?= $data['secondName'] ?></td>
        <td>
            <?= $data['address']['city'] . ", " . $data['address']['street'] . ", " . $data['address']['house'] ?>
        </td>
        <td>
            <?php foreach ($data['phoneNumbers'] as $v) {
                echo $v . " ";
            } ?>
        </td>
    </tr>

</table>
</body>
</html>
