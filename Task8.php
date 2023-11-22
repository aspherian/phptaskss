<?php
//Создайте переменную $game и присвойте ей значение 'Путешественник'.
//Обращаясь с этим словом как с отдельными символами составьте различные русские слова.

$game = 'Путешественник';

?> <h1> <?php echo mb_substr($game, 8, 1) . mb_substr($game, 5, 1) . mb_substr($game, 6, 1) . mb_substr($game, 10, 1) . mb_substr($game, 1, 1) . mb_substr($game, 4, 1) . mb_substr($game, 13, 1) . mb_substr($game, 12, 1); ?> </h1>