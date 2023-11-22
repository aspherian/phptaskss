<?php
//Дана входная строка со словами.
//Измените порядок слов в обратном порядке.
//Словом считается любая последовательность не-пробельных символов.
//Входная строка не содержит пробелов в начале и конце.
//Каждое слово отделено от другого одним пробелом.
//Строка: “hello world”

function ReverseWords(string $str)
{
    $StringWords = explode(' ', $str);
    
    for($i = 0; $i < count($StringWords) / 2; $i++)
    {
        $tmp = $StringWords[$i];
        $StringWords[$i] = $StringWords[count($StringWords) - 1 - $i];
        $StringWords[count($StringWords) - 1 - $i] = $tmp;
    }
    return join(' ', $StringWords);
}
?><h1><?php echo ReverseWords("hello world") ?></h1>