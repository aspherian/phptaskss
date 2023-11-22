<?php
//В переменной $day лежит какое-то число из интервала от 1 до 31.
// Определите в какую декаду месяца попадает это число (в первую, вторую или третью).

$day = 22;

if ($day >= 1 && $day <= 10)
{
    $decade = 'Первая';
}else if ($day >= 11 && $day <= 20) {
    $decade = 'Вторая';
}else if ($day >= 21 && $day <= 31) {
    $decade = 'Третья';
}else {
    echo "<h1>invalid value of \'$day\' variable!</h1>";
}
?>

<h1>День: <?php echo $day; ?></h1>

<?php if (isset($decade)): ?>
    <h1>Декада: <?php echo $decade; ?></h1>
<?php endif; ?>
