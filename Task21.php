<?php
// Даны три числа 3, 5, 8. Найдите их среднее арифметическое.

$numbers = [3, 5, 8];
$average = 0;

foreach ($numbers as $number)
{
    $average += $number;
}
$average /= count($numbers);
?>

<h1>Даны числа: 3, 5, 8</h1>
<h1>Среднее арифметическое: <?php echo $average; ?></h1>
