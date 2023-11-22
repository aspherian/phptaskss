<?php
//На вход подается строка целых чисел, разделенных пробелами.
//Найдите максимальную разницу между двумя элементами строки при условии,
//что меньшее число должно находиться справа от большего.

$input = "7 14 4 8 1";
$numbers = array_map('intval', explode(' ', $input));
$maxDifference = 0;
$minNumber = $numbers[0];

for ($i = 1; $i < count($numbers); $i++)
{
    if ($numbers[$i] < $minNumber)
    {
        $minNumber = $numbers[$i];
    }
    $difference = $numbers[$i] - $minNumber;
    if ($difference > $maxDifference)
    {
        $maxDifference = $difference;
    }
}
?>

<h1>Дана строка: <?php echo $input; ?></h1>
<h1>Максимальная разница чисел: <?php echo $maxDifference; ?></h1>