<?php
session_start();
$_SESSION['visitedPages'] = $_SESSION['visitedPages'] ?? [];
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    header('Location: Task88page2.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task88page1</title>
</head>
<body>
<form method="POST" action="">
    <label for="name">имя:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Next</button>
</form>
</body>
</html>
