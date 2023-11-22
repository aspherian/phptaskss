<?php
//Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
// Если она имеет значение '1', то в переменную $result запишем 'зима',
// если имеет значение '2' – 'лето' и так далее.

$num = 1;

if ($num == 1) {
    $result = 'Зима';
}else if ($num == 2){
    $result = 'Лето';
}else if ($num == 3){
    $result = 'Весна';
}else if ($num == 4){
    $result = 'Осень';
}else {
    echo '<h1>invalid \'$num\' variable value!</h1>';
}
?>

<h1>$num = <?php echo $num; ?></h1>

<?php if (isset($result)): ?>
    <h1>$result = <?php echo $result; ?></h1>
<?php endif; ?>