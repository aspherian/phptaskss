<!--Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия),
 вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс).
 Вывести стоимость отдыха, которая вычисляется как произведение количества дней на 400.
 Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
 И далее это число уменьшается на 5%, если указана скидка.-->


<form method="post">
    <label>Страна для отдыха</label>
    <select name="country">
        <option value="Турция">Турция</option>
        <option value="Египет">Египет</option>
        <option value="Италия">Италия</option>
    </select>
    <hr/>
    <label>Количество дней: </label><input type="number" name="days"/>
    <hr/>
    <label>Наличие скидки </label><input type="checkbox" name="discount"></input>
    <hr/>
    <input type="submit" value="Рассчитать"/>
</form>

<?php
    if (key_exists('country', $_POST))
    {
        if ($_POST['days'] > 0)
        {
            $price = intval($_POST['days'] * 400);

            if ($_POST['country'] == 'Египет')
            {
                $price += $price * 0.1;
            }
            else if ($_POST['country'] == "Италия")
            {
                $price += $price * 0.12;
            }

            if (key_exists('discount', $_POST))
            {
                $price -= $price * 0.05;
            }

            echo "<h3>Страна: {$_POST['country']} <br/>  Количество дней: {$_POST['days']} <br/> Наличие скидки: " . (key_exists('discount', $_POST) ? 'есть' : 'нет') . "</h3>";
            echo "<h2>Стоимость отдыха: {$price}</h2>";
        }
    }
?>