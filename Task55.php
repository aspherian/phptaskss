<?php
//Дана строка из 6-ти цифр.
//Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
//Если это так – выведите 'да', в противном случае выведите 'нет'

$numsString = '123321';
function troubleWithNaming (string $numbersString) : array
{
    if (strlen($numbersString) != 6)
    {
        throw new LengthException();
    }

    $sum = [0, 0];

    $stringsArrayPair = array_chunk(str_split($numbersString), strlen($numbersString) / 2);

    for ($n = 0; $n < 2; $n++)
    {
        for ($i = 0; $i < 3; $i++)
        {
            $sum[$n] += (int)$stringsArrayPair[$n][$i];
        }
    }

    return $sum;
}

try {
    $result = troubleWithNaming($numsString);
} catch (LengthException $ex) {
    echo "<h1>" . "Ошибка. Длина строки должна быть равна 6. Её действительная длина -  ". count(str_split($numsString)) . "</h1>";
}
?>
<h1>Строка: <?php echo $numsString; ?></h1>
<?php if (isset($result)): ?>
    <h1>Равна ли сумма первых трёх цифр строки сумме второй тройки? </h1>
    <?php if($result[0] == $result[1]): ?>
        <h2>Да</h2>
    <?php else: ?>
        <h2>Нет</h2>
    <?php endif; ?>    
<?php endif; ?>