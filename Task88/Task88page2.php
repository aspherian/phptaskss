<?php
session_start();
array_pop($_SESSION['visitedPages']);
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['surname'])) {
    $_SESSION['surname'] = $_POST['surname'];
    header('Location: Task88page3.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task88page2</title>
</head>
<body>
<form method="POST" action="">
    <label for="surname">фамилия:</label>
    <input type="text" id="surname" name="surname" required>
    <button type="submit">Next</button>
</form>
</body>
</html>
