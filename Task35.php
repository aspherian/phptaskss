<?php
//Даны два числа 4 и 6. Найдите сумму их квадратов
function findSumOfSquaredNumbers($firstNum, $secondNum)
{
    return $firstNum**2 + $secondNum**2;
}

$firstNumber = 3;
$secondNumber = 4;
?>

<h1>Даны числа: <?php echo $firstNumber; ?>, <?php echo $secondNumber; ?></h1>
<h1>Сумма их квадратов: <?php echo findSumOfSquaredNumbers($firstNumber, $secondNumber); ?></h1>