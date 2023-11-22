<?php
//Дана строка $str.
//Замените в ней все буквы 'a' на цифру 1,
//буквы 'b' – на 2, а буквы 'c' – на 3.
//Решите задачу двумя способами работы
//с функцией strtr (массив замен и две строки замен).

$str = "aabbbbbccccbbbcccaaacccabc";
$replacementArray = array('a' => 1, 'b' => 2, 'c' => 3);
$replacementString1 = "abc";
$replacementString2 = "123";
?>

<h1> <?php echo $str . "\n"; ?> </h1>
<h1> <?php echo strtr($str, $replacementArray) . "\n"; ?> </h1>
<h1> <?php echo strtr($str, $replacementString1, $replacementString2); ?> </h1>