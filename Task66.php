<?php
//Дана строка. Проверьте, что она начинается на 'http://' .
//Если это так, выведите 'да', если не так – 'нет'

$string = "http://www.youtube.com/watch?v=dQw4w9WgXcQ";
?>


<h1>Дана строка: <?php echo $string; ?></h1>
<h1>Она начинается с http:// ?</h1>
<?php if (str_starts_with($string, "http://")): ?>
    <h1>да</h1>
<?php else: ?>
    <h1>нет</h1>
<?php endif; ?>