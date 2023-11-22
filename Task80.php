<?php
//Преобразуйте строку 'var_test_text' в 'varTestText' .
// Скрипт, конечно же, должен работать с любыми аналогичными строками.

function UpperCase($string)
{
    $words = explode('_', $string);
    $UpperString = '';

    foreach ($words as $word)
    {
        $UpperString .= ucfirst($word);
    }
    return lcfirst($UpperString);
}

$string = 'var_test_text';
?>
<h1>Дана строка: <?php echo $string; ?> </h1>
<h1>Отформатированная строка: <?php echo UpperCase($string); ?> </h1>