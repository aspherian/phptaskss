<?php
//Дана строка с символами, например, 'abcde'.
//Проверьте, что первым символом этой строки является буква 'a'.
//Если это так – выведите 'да', в противном случае выведите 'нет'.

$string = 'abcde';

echo "<h1>Дана строка: {$string}</h1>";
echo "<h1>Её первый символ 'a'?</h1>";
?>

<h1><?php echo $string[0] == 'a' ? 'Да' : 'Нет'; ?></h1>
<?php echo "<h1>Её первый символ: '{$string[0]}'</h1>";?>