<?php
//Дана строка 'PHP' . Сделайте из нее строку 'php' .

$sourceString = "PHP";
$resultString = strtolower($sourceString);
?>

<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Отформатированная строка: <?php echo $resultString; ?></h1>