<?php
//Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.

function secondsInHours(int $hours)
{
    return $hours * 60 * 60;
}
function secondsInDays(int $days)
{
    return $days * 24 * 60 * 60; 
}
function secondsInMonth(int $daysInMonth)
{
    if (29 <= $daysInMonth && $daysInMonth <= 31)
    {
        return $daysInMonth * 24 * 60 * 60;
    }
    return "Не может быть \"" . $daysInMonth . "\" " . "дней в месяцe";
}

$hours = 6;
$days = 16;
$daysInMonth = 29;
?>

<h1>Секунд в <?php echo $hours . " часах: " . secondsInHours($hours)?></h1>
<h1>Секунд в <?php echo $days . " днях: " . secondsInDays($days)?></h1>
<h1>Секунд в <?php echo "месяце состоящем из ". $daysInMonth . " дней: " . secondsInMonth($daysInMonth)?></h1>