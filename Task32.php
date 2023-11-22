<?php
//Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5

$sourceArray = [43, 5, 4, 34, 84, 2, 75, 23, 55, 445, 959];

$resultArray = array();

function FillNewArr ($numArray, $resArr)
{
    foreach ($numArray as $number)
    {
        if (in_array('5', str_split(strval($number))))
        {
            array_push($resArr, $number);
        }
    }
    return $resArr;
}
?>

<h1>Исходный массив: <?php print_r($sourceArray); ?></h1>
<h1>Массив с числами в которых есть цифра 5: <?php print_r(FillNewArr($sourceArray, $resultArray)); ?></h1>
