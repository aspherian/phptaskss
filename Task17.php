<?php
//Нужно написать код, который будет принимать на вход число и 3 формы слова
//- 3 склонения в зависимости от числа, с которым они употребляются в речи.
//Например: яблоко (одно), яблока (три), яблок (пять).
//В зависимости от числа нужно выбрать правильную форму слова
//и вывести на экран фразу из числа и слова.

function WordChoice($number, $Forms): void
{
    $WordForm = $number . ' ';
    switch ($number % 10)
    {
        case 1:
            if ($number % 100 != 11)
            {
                $WordForm .= $Forms[0];
            } else {
                $WordForm .= $Forms[2];
            }
            break;
        case 2:
        case 3:
        case 4:
            if ($number % 100 < 10 || $number % 100 > 20)
            {
                $WordForm .= $Forms[1];
            } else {
                $WordForm .= $Forms[2];
            }
            break;
        default:
            $WordForm .= $Forms[2];
            break;
    }
    echo $WordForm;
}
$number = 5;
$Forms = ['яблоко', 'яблока', 'яблок'];

?><h1> <?php WordChoice($number, $Forms); ?> </h1>