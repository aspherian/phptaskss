<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
//С помощью цикла foreach выведите эти слова в столбик.

$array = array(
    'html', 'css', 'php', 'js', 'jq'
);
?>
<h1><?php foreach ($array as $i)
{
    echo $i . "\n";
}?></h1>