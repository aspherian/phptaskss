<?php require_once 'ПУТЬ SQL90PHP УКАЖИ'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><a href="/Task90/view.php">База данных</a> <a href="/Task90/index.php">Добавить данные</a></header>
    <hr/>

    <?php //var_dump($_POST) . "\n"; ?>

    <?php
        if (key_exists('lastName', $_POST))
        {
            $repo->CreateEntry($_POST);
        }

        $rows = $repo->ShowAll();
    ?>
    <h1></h1>
    <?php foreach ($rows as $row): ?>
        <div>
            <h1><label>Фамилия: </label><?php echo $row['last_name']; ?></h1>
            <h1><label>Класс: </label><?php echo $row['class']; ?></h1>
            <h1><label>Год поступления: </label><?php echo $row['year_of_admission']; ?></h1>
            <h1><label>Поручение: </label><?php echo $row['instructions']; ?></h1>
        </div>
        <hr/>
    <?php endforeach; ?>
</body>
</html>