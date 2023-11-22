<?php
//Проверьте, что в строке есть две точки подряд.
//Если это так – выведите 'есть', если не так – 'нет'.
function DotsCheck($string): string
{
    if (strpos($string, "..") !== false)
    {
        return 'Двоеточие есть';
    } else {
        return 'Двоеточия нет';
    }
}

$str1 = "тут есть двоеточие..";
$str2 = ".тут.нет.дв.оет.оч.ия."; ?>
<h1> <?php echo $str1 . "\n"; ?> > </h1>
<h1> <?php echo DotsCheck($str1) . "\n"; ?> </h1>
<h1> <?php echo $str2 . "\n"; ?> </h1>
<h1> <?php echo DotsCheck($str2); ?> </h1>