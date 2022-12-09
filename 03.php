<?php

do {
    $number = (int)readline("Введите положительное число. ");
} while ( !($number > 0) );

$mod = $number % 8;

switch ( $mod ) {
    case 1:
        echo "Первый палец";
        break;
    case 0:
    case 2:
        echo "Второй палец";
        break;
    case 3:
    case 7:
        echo "Третий палец";
        break;
    case 4:
    case 6:
        echo "Четвёртый палец";
        break;
    case 5:
        echo "Пятый палец";
        break;
}