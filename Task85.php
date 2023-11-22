<?php
//Дана строка вида /aaa/222/we33/qqq/.
//Сделайте функцию, которая заменит энный блок в такой строке на заданный текст.
//Пример: funct('/aaa/222/we33/qqq/', 2, '!')
//выдаст '/aaa/222/!/qqq/ – заменили второй блок (нумерация с нуля).

function substitutionBlock($string, $blockIndex, $substitution): string
{
    $blocks = explode('/', $string);
    $blocks[$blockIndex+1] = $substitution;
    return implode('/', $blocks);
}

$string = '/aaa/222/we33/qqq/';
?>
<h1> <?php echo substitutionBlock($string, 2, "!"); ?> </h1>