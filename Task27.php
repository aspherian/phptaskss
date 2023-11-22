<?php
//Дано число. Если оно не меньше 50, то выведите квадрат этого числа,
//если же это число больше 10 и меньше 30, то выведите ноль,
//в остальных случаях выведите слово "Ошибка"

function CustomFunction($number)
{
    if ($number >= 50)
    {
        return $number ** 2;
    }else if($number > 10 && $number < 30){
        return 0;
    }else{
        return "Ошибка";
    }
}

$num = 70;
?>

<h1>Дано число: <?php echo $num; ?></h1>
<h1>Результат: <?php echo CustomFunction($num); ?></h1>