<?php

function arrRandomize (int $size, int $minRand, int $maxRand): array
{
    $arr = [];
    for ( $i = 0; $i < $size; $i++ ) {
        $arr[] = rand($minRand, $maxRand);
    }
    return $arr;
}