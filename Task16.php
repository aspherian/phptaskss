<?php
//На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами.
//Найдите все возможные комбинации пар чисел и выведите их в любом порядке.

function FindCombinations($numString)
{
    $numString = trim($numString);
    $numArray = explode(" ", $numString);

    for ($i = 0; $i < count($numArray) - 1; $i++)
    {
        for ($j = $i + 1; $j < count($numArray); $j++)
        {
            echo "<h1>" . $numArray[$i] . " and " . $numArray[$j] . "<h1>";
        }
    }
}
$sourceString = " 1 2 3 4 ";
?>

<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Все возможные комбинации:<?php FindCombinations($sourceString) ?></h1>

