<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

var_dump(findInArray('Компьютерная мышь', $box));

function findInArray(string $findEl, array $findArr): bool
{
    if ( in_array($findEl, $findArr) ) {
        return true;
    }
    foreach ( $findArr as $value ) {
        if ( is_array($value) ) {
            print_r($value);
            if ( findInArray($findEl, $value) ) {
                return true;
            }
        }
    }
    return false;
}
