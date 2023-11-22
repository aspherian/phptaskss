<?php
//Дан многомерный массив
//1. $arr = [ 2. 'sp'=>['azul', 'rojo', 'verde'],
//3. 'en'=>['blue', 'red', 'green'], 4. ];
//Выведите с его помощью слово 'azul' .

$arr = ['sp' => ['azul', 'rojo', 'verde'], 'en' => ['blue', 'red', 'green']];
?>

<h1><?php echo $arr['sp'][0]; ?></h1>
