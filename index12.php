<!DOCTYPE>
<html lang="ru">
<head>
    <title>Задание5</title>
    <meta charset="utf-8">
</head>
<?php
$content = file_get_contents(__DIR__ . '/numbers_book12');
$data = json_decode($content, true);
$string = " ";
?>
<body>
<table>
    <?php foreach ($data as $key => $value) {
        $i = $key + 1;
        ?>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефоны</td>
    </tr>
    <tr>
        <td><?=$i.".". $data[$key]['firstName'] ?></td>
        <td><?= $data[$key]['secondName'] ?></td>
        <td>
            <?= $data[$key]['address']['city'] . ", " . $data[$key]['address']['street'] . ", " . $data[$key]['address']['house'] ?>
        </td>
        <td>
            <?= implode($string, $data[$key]['phoneNumbers']) ?>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
