<?php

$arr01 = [];
$arr02 = [];
$arr03 = [];
$arr04 = [];

$size = 10;
$randomCount = 100;

for ( $i = 0; $i < $size; $i++ ) {
    $arr01[] = rand(1, $randomCount);
    $arr02[] = rand(1, $randomCount);
}

for ( $i = 0; $i < $size; $i++ ) {
    $arr03[] = $arr01[$i] * $arr02[$i];
}

foreach ( $arr01 as $key => $value ) {
    $arr04[] = $value * $arr02[$key];
}

print_r($arr01);
print_r($arr02);
print_r($arr03);
print_r($arr04);