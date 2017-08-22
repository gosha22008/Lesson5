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
    <?php foreach ($data as $k => $v) : ?>
    <tr>
        <td><?= $k ?></td>
        <td><?= $v ?></td>
    </tr>
<?php endforeach; ?>
</table>
</body>
</html>