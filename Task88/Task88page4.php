<?php
session_start();
array_pop($_SESSION['visitedPages']);
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

$visitedPages = $_SESSION['visitedPages'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task88page4</title>
</head>
<body>
<h2>Data Collected:</h2>
<ul>
    <li>имя: <?php echo $_SESSION['name']; ?></li>
    <li>фамилия: <?php echo $_SESSION['surname']; ?></li>
    <li>возраст: <?php echo $_SESSION['age']; ?></li>
</ul>

<h2>посещенные страницы:</h2>
<ul>
    <?php foreach ($visitedPages as $page) : ?>
        <li><?php echo $page; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
