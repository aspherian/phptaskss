<?php
//Обрежьте длинную строку так, чтобы ее длина была не более N символов,
//при этом слова не должны быть разорваны – обрезание всегда проходит по пробелу
//и новая строка всегда меньше N.

function cutString($string, $maxLen)
{
    if (strlen($string) <= $maxLen)
    {
        return $string;
    }

    $cuttingString = substr($string, 0, $maxLen);
    $spaceIndex = strrpos($cuttingString, ' ');

    if ($spaceIndex !== false)
    {
        $cuttingString = substr($cuttingString, 0, $spaceIndex);
    }
    return $cuttingString;
}

$str = "съешь ещё этих мягких французских булок, да выпей чаю";
$maxLen = 50;
$cuttingString = cutString($str, $maxLen);

?> <h1> <?php echo $cuttingString; ?> </h1>

