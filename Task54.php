<?php
//Дана строка из 3-х цифр. Найдите сумму этих цифр.
//То есть сложите как числа первый символ строки, второй и третий.

$numbersString = '123';

$sum = 0;

foreach (str_split($numbersString) as $digitChar)
{
    $sum += (int) $digitChar;
}
?>

<h1>Дана строка: <?php echo $numbersString; ?></h1>
<h1>Сумма цифр числа: <?php echo $sum; ?></h1>