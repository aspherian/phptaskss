<?php
//Дана строка 'php' . Сделайте из нее строку 'PHP' .

$sourceString = "php";
$resultString = strtoupper($sourceString);
?>

<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Отформатированная строка: <?php echo $resultString; ?></h1>