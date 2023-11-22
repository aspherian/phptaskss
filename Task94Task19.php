<?php
//это уже было в Task19
//Сделайте функцию, которое будет принимать 2 числа,
//а возвращать их НОК - наименьшее общее кратное.
//НОК двух чисел – это самое маленькое число, которое делится и на одно,
//и на второе число. Пример: числа 12 и 15 имеют НОК 60. Число 60 делится и на 12,
//и на 15 и это самое минимальное такое число.

function FindNOK($firstNum, $secondNum) {
    for ($i = 1; $i <= $firstNum * $secondNum; $i++) {
        if ($i % $firstNum == 0 && $i % $secondNum == 0) {
            return $i;
        }
    }
}

$firstNumber = 3;
$secondNumber = 2;
?>

<h1>Наименьшее общее кратное чисел <?php echo $firstNumber; ?> и <?php echo $secondNumber; ?> - <?php echo FindNOK($firstNumber, $secondNumber) ?></h1>