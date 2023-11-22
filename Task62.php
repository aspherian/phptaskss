<?php
//Дана строка 'LONDON' . Сделайте из нее строку 'London' .

$sourceString = "LONDON";
$resultString = ucfirst(strtolower($sourceString));
?>

<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Отформатированная строка: <?php echo $resultString; ?></h1>