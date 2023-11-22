<?php
//Реализуйте функцию flatten, которая в случае,
//если массив обладает уровнями вложенности,
//приведёт его к элементарному виду (вложенность может быть любой глубины).
//Пример: flatten([1, [2], [3, [[[4]]]]]) вернёт [1, 2, 3, 4]

function flatten($array): array
{
    $result = [];
    foreach ($array as $element)
    {
        if (is_array($element))
        {
            $result = array_merge($result, flatten($element));
        } else {
            $result[] = $element;
        }
    }
    return $result;
}

$array = [1, [2], [3, [[[4]]]]];
$result = flatten($array);
echo json_encode($result);