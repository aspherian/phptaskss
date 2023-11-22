<?php
//В переменной $month лежит какое-то число из интервала от 1 до 12.
// Определите в какую пору года попадает этот месяц (зима, лето, весна, осень)

$month = 11;

echo "<h2>Значение переменной \"\$month\": {$month}</h2>";

if (in_array($month, [12, 1, 2]))
{
    echo '<h1>Зима</h1>';
} else if (in_array($month, [3, 4, 5])) {
    echo '<h1>Весна</h1>';
} else if (in_array($month, [6, 7, 8])) {
    echo '<h1>Лето</h1>';
} else if (in_array($month, [9, 10, 11])) {
    echo '<h1>Осень</h1>';
} else {
    echo "<h2>Invalid \"\$month\" variable value: {$month} </h2>";
}

