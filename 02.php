<?php

$wishes = ['счастья', 'здоровья', 'воображения', 'терпения', 'благополучия'];
$epithets = ['бесконечного', 'крепкого', 'космического', 'безудержного'];
$congratulations = [];

for ( $i=1; $i <= 3; $i++ ) {
    $epithetIndex = array_rand($epithets);
    $wishIndex = array_rand($wishes);
    $congratulations[] = "{$epithets[$epithetIndex]} {$wishes[$wishIndex]}";
    unset($epithets[$epithetIndex]);
    unset($wishes[$wishIndex]);
}

$congratulation = implode(", ", $congratulations);
$congratulation = substr_replace($congratulation, ' и', strrpos($congratulation, ','), 1);

$name = readline("Введите имя именинника. ");

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $congratulation!";