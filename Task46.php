<?php
//Дан многомерный массив $arr.
//Напишите функцию, которая принимает строки вида
//'строка1.строка2.строка3' – буквы разделенные точками,
//а возвращает элемент многомерного массива
//$arr['строка1']['строка2']['строка3'].
//Количество точек в строке может быть любым, вложенность массива тоже любая,
//ключи массива не содержат точек

$arr = [
    'string1' => [
        'string2' => [
            'string3' => 'test'
        ]
    ]
];

function getElementFromArray($arr, $string)
{
    $keys = explode('.', $string);
    $element = $arr;

    foreach ($keys as $key)
    {
        if (isset($element[$key]))
        {
            $element = $element[$key];
        } else {
            return null;
        }
    }
    return $element;
}

?> <h1><?php echo getElementFromArray($arr, "string1.string2.string3") ?></h1>


