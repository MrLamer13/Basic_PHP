<?php

do {
    $userAnswer = (int)readline("В каком году произошло крещение Руси?. Варианты: 810, 988 или 740 год. ");
} while ( $userAnswer != 810 && $userAnswer != 988 && $userAnswer != 740 );

if ( $userAnswer == 988 ) {
    echo "Ваш ответ $userAnswer верный! Поздравляем!";
} else {
    echo "Ваш ответ $userAnswer увы неверный!";
}
