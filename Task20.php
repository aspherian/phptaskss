<?php
//Разложение числа на простые множители.
//Дано число. Разложите его на простые множители.
//Пример: 12 - это 2 * 2 * 3.

function Decomposition($number)
{
    $factors = array();
    $divisor = 2;

    while ($number > 1)
    {
        if ($number % $divisor == 0)
        {
            $factors[] = $divisor;
            $number /= $divisor;
        } else {
            $divisor++;
        }
    }
    return $factors;
}

$number = 12;
$result = Decomposition($number);
?>

<h1>Дано число: <?php echo $number; ?></h1>
<h1>Простые делители:
<?php foreach ($result as $factor): ?>
    <?php echo "$factor "; ?>
<?php endforeach; ?>
</h1>