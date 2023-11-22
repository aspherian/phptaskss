<?php
//Создайте массив заработных плат $arr. Выведите на экран зарплату Коли.

$arr = ['Александр' => 43200, 'Коля' => 666666, 'Софья' => 29800, 'Людмила' => 56000];
?>

<h1 text_align="center">Заработные платы</h1>

<?php foreach ($arr as $employee => $salary):?>
    <h2><?php echo $employee; ?>: <?php echo $salary . ' р';?></h2>
<?php endforeach ?>

<hr/>
<h1>Зарплата КолиКраша: <?php echo $arr["Коля"]; ?></h1>