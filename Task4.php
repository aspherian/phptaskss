<!--Получите гет запрос с параметрами:
- first_name=Иван
- age=19
- На веб странице у вас должна быть форма, запрашивающая город проживания.
- После ввода города добавьте его в url строку.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK4</title>
</head>
<body>
    <form action="Task4.php" method="get">
        <input name="City" type="text"/>
        <button type="submit">Send</button>
    </form>

    <hr>

    <?php if (isset($_GET["first_name"])): ?>
        <h1>Имя: <?php echo $_GET["first_name"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["age"])): ?>
        <h1>Возраст: <?php echo $_GET["age"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["City"])): ?>
        <h1>Город: <?php echo $_GET["City"] ?></h1>
    <?php endif; ?>

</body>
</html>


