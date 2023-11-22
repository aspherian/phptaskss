<?php
//Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.

$string = "string string string";
?>

<h1>Дана строка: <?php echo $string; ?></h1>
<h1>Отформатированная строка: <?php echo substr($string, -3); ?></h1>