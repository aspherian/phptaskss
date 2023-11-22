<?php
session_start();
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['age'])) {
    $_SESSION['age'] = $_POST['age'];
    header('Location: Task88page4.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task88page3</title>
</head>
<body>
<form method="POST" action="">
    <label for="age">возраст:</label>
    <input type="text" id="age" name="age" required>
    <button type="submit">Next</button>
</form>
</body>
</html>
