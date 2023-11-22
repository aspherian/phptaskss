<?php
//Дан многомерный массив.
//Уровни вложенности его подмассивов могут быть разными,
//например: $arr = array( array( 1, 2, 3, ), array( array(4, 5, array(6, 7, 7)), 9, 10, ), ).
//Выведите на экран столбец всех его элементов.

function iterateArray($arr)
{
    foreach ($arr as $key => $value)
    {
        if (is_array($value))
        {
            iterateArray($value);
        } else {
            echo '<h3>Ключ: ' . $key . '    Значение: ' . $value . '</h3>';
        }
    }
}

$array = array( array( 1, 2, 3, ), array( array(4, 5, array(6, 7, 7)), 9, 10, ), );

iterateArray($array);

