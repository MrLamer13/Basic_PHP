<?php
require 'arrRandomize.php';

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$arrRand = arrRandomize(10, 1000, 100000);

$parityMod = function (int $number): string {
    if ( $number % 2 == 0 ) {
        return "Чётное";
    } else {
        return "Нечётное";
    }
};

$parityBitwiseAND = function (int $number): string {
    if ( $number & 1 ) {
        return "Нечётное";
    } else {
        return "Чётное";
    }
};

$resultMod =  array_map($parityMod, $arr);
$resultBitwiseAND = array_map($parityBitwiseAND, $arr);
$resultModRand =  array_map($parityMod, $arrRand);
$resultBitwiseANDRand = array_map($parityBitwiseAND, $arrRand);

print_r(array_combine($arr, $resultMod));
print_r(array_combine($arr, $resultBitwiseAND));
print_r(array_combine($arrRand, $resultModRand));
print_r(array_combine($arrRand, $resultBitwiseANDRand));
