<?php
//На вход подается строка из чисел, разделенных пробелами.
//Замените каждый элемент строки произведением всех других элементов.

function MultipliFunc ($numString)
{
    $numString = trim($numString);
    $resultString = "";
    $numArray = explode(" ", $numString);

    foreach ($numArray as $num)
    {
        $tmpMultiplication = 1;

        for ($i = 0; $i < count($numArray); $i++)
        {
            if ($num != $numArray[$i])
            {
                $tmpMultiplication *= $numArray[$i];
            }
        }
        $resultString .= $tmpMultiplication . " ";
    }
    $resultString = trim($resultString);
    return $resultString;
}

$sourceString = " 1 2 3 4 5 6 "
?>

<h1>Дана строка: <?php echo $sourceString; ?></h1>
<h1>Результат: <?php echo MultipliFunc($sourceString); ?></h1>