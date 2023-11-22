<?php
//Создайте переменную $text и присвойте ей значение 'Мама мыла раму!'.
//Выведите символы: ы, м, а, у, ! всеми возможными способами.

//phpinfo();
//mb_internal_encoding ("UTF-8");


$text = 'Мама мыла раму!';
?>
<h1> <?php
    echo mb_substr($text, 8, 1);
    echo mb_substr($text, 13, 1);
    echo mb_substr($text, 6, 1);
    echo mb_substr($text, 0, 1);
    echo substr($text, -1);
?> </h1>
