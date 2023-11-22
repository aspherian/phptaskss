<!--//Сделайте две страницы: index.php и hello.php.
//При заходе на index.php спросите с помощью формы имя пользователя, запишите его в куки.
//При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!" .-->

<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    setcookie('name', $name, time() + (86400 * 30), "/");
    echo "Hello, $name!";
} else {
    echo "Hello, guest!";
}
?>