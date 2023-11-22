<?php
//Дан массив с элементами 1, 2, 3, 4, 5.
//С помощью цикла foreach найдите сумму элементов этого массива.
//Запишите ее в переменную $result.

$result = 0;
$array = [1, 2, 3, 4, 5];

foreach ($array as $i)
{
    $result = $result + $i;
}
?>
<h1> <?php echo $result; ?> </h1>