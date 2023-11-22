<?php
//Дана строка “13217” выведите сумму всех элементов строки.

$sourceString = "13217";

$sum = 0;

foreach(str_split($sourceString) as $num)
{
    $sum += $num;
}
?>
<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Сумма всех элементов: <?php echo $sum; ?></h1>
