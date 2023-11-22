<?php
//Дано трехзначное число. Найдите сумму его цифр.

function SumOfDigits($num)
{
    $sum = floor($num / 100) + floor($num / 10) % 10 + $num % 10;
    return $sum;
}

$num = 674;
?>

<h1>Сумма цифр числа <?php echo $num; ?> равна <?php echo SumOfDigits($num); ?></h1>
