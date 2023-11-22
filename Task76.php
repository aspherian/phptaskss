<?php
//Запишите в переменную $str случайную строку $len длиной,
//состоящую из маленьких букв латинского алфавита.
//Подсказка: воспользуйтесь циклом for или while.

$str = '';
$len = rand(1, 20);
$sourseString = 'cmtitoptnbvzurbahfywweprbekjr';

for ($i = 0; $i < $len; $i++)
{
    $RandFill = rand(0, strlen($sourseString) - 1);
    $str .= $sourseString[$RandFill];
}
?><h1><?php echo "Длина строки: " . $len . "\n";
echo $str; ?> </h1>