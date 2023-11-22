<?php
//Создайте массив вида [1, [2], [[3]], [[[4]]] ], вместо 4 может быть любое целое значение.
// К примеру, если 5 – тогда будет массив [1, [2], [[3]], [[[4]]], [[[[5]]]] ].

function insertArray($nesting, $something): array
{
    if ($nesting <= 0)
    {
        return [$something];
    }
    return [insertArray($nesting - 1, $something)];
}
$arr = [];
$counter = 0;
$nesting = 7;

while ($counter <= $nesting)
{
    if ($counter <= 0)
    {
        $arr[0] = 1;
    } else {
        $arr[$counter] = insertArray($counter - 2, $counter);
    }
    $counter = $counter + 1;
}
unset($arr[1]);
?>

<h1><?php echo json_encode(array_values($arr)) ?></h1>
