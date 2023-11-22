<?php
//Дано натуральное число 8.
//Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.

function EvenOdd($num)
{
    if (!($num % 2))
    {
        return $num / 2;
    }else{
        return $num * 3;
    }
}

$num = 8;
?>

<h1>Дано число: <?php echo $num; ?></h1>
<h1>Результат: <?php echo EvenOdd($num); ?></h1>
