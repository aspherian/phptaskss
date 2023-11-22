<?php
//Дан массив с числами. Посчитайте суммарное количество цифр 3 в этих числах.

$i = 0;
$array = [44, 585, 4405, 6337, 983, 99];
?><h1><?php foreach ($array as $number)
{
        if (str_contains((string)$number, '3'))
        {
            $i = $i + 1;
        }
}
echo $i; ?></h1>