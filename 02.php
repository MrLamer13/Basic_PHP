<?php
require 'arrRandomize.php';

$arrRand = arrRandomize(10, 10, 100);
print_r($arrRand);
print_r(arrMinMaxAvg($arrRand));

function arrMinMaxAvg (array $arr): array
{
    $result['Максимальный элемент'] = max($arr);
    $result['Минимальный элемент'] = min($arr);
    $result['Среднее значение'] = array_sum($arr) / count($arr);
    return $result;
}
