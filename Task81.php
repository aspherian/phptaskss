<?php
//Дана строка следующего вида: 5 цифр, затем пробел, затем еще 5 цифр.
//Например, дана такая строка '12345 67890' . Сделайте из нее строку '54321 09876' .

$string = '12345 67890';
$numbers = explode(' ', $string);
$reversNumber = array_map('strrev', $numbers);
$reversString = implode(' ', $reversNumber);
?>
<h1> <?php echo $reversString; ?> </h1>