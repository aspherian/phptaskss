<?php
//Пользователь вводит названия городов через пробел.
//Переставьте названия так, чтобы названия были упорядочены по алфавиту.

mb_internal_encoding("UTF-8");

function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}
?>
    <form action="Task79.php" method="post">
        <input type="text" name="cities" placeholder="Введите названия городов"/>
        <input type="submit" value="Confirm"/>
    </form>

<?php
if (key_exists('cities', $_POST) && $_POST['cities'] > 0)
{
    $citiesString = $_POST['cities'];

    while(str_contains($citiesString, '  '))
    {
        $citiesString = str_replace('  ', ' ', $citiesString);
    }

    $citiesArray = explode(' ', $citiesString);

    for ($i = 0; $i < count($citiesArray); $i++)
    {
        $citiesArray[$i] = mb_ucfirst($citiesArray[$i]);
    }

    sort($citiesArray);

    echo "<h2>" . join(' ', $citiesArray) . "<h2>";
}
?>