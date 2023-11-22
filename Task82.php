<?php
//Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3

$array = [67, 83, 9, 171, 949];
?><h1><?php foreach ($array as $number)
{
    if (str_contains((string)$number, '3'))
    {
        echo $number . ' ';
    }
}?></h1>