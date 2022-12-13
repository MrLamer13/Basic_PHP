<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 4,
        'Смирнова Христина' => 4,
        'Рогозин Даниил' => 2,
        'Золин Владилен' => 3
    ],
    'ИТ30' => [
        'Архаткина Владислава' => 2,
        'Мещерякова Мария' => 4,
        'Саврасова Фаина' => 5,
        'Хромченко Зинаида' => 2,
        'Протасова Майя' => 5
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Ябров Тимур' => 2,
        'Белорусов Ефрем' => 3,
        'Ягода Назар' => 5,
        'Ярилова Розалия' => 5,
        'Нырко Платон' => 4,
        'Калинин Агап' => 2,
        'Никифоров Юлиан' => 3
    ]
];

// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
foreach ( $students as $key => $value ) {
    $averageValueOfAcademicPerformance[$key] = array_sum($value) / count($value);
}

arsort($averageValueOfAcademicPerformance);
$maxAverageValue = max($averageValueOfAcademicPerformance);
$countMax = 0;

foreach ( $averageValueOfAcademicPerformance as $key => $value ) {
    if ( $maxAverageValue == $value ) {
        $countMax++;
    }
}

$maxAverageValueOfAcademicPerformance = array_slice($averageValueOfAcademicPerformance, 0, $countMax);

$out = "Самая высокая средняя успеваемость $maxAverageValue";
foreach ( $maxAverageValueOfAcademicPerformance as $key => $value ) {
    $out .= " и в группе $key";
}
$out = substr_replace($out, '', strpos($out, ' и '), 2);
$out .= ".\n";

print_r($averageValueOfAcademicPerformance);
print_r($maxAverageValueOfAcademicPerformance);
echo $out;

// bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb
$studentsForExpulsion = [];
foreach ( $students as $group => $valueArr ) {
    if ( in_array(2, $valueArr) ) {
        foreach ( $valueArr as $name => $value ) {
            if ( $value == 2 ) {
                $studentsForExpulsion[$group][] = $name;
            }
        }
    } else continue;
}
if ( $studentsForExpulsion ) {
    $outStudentsForExpulsion = "На отчисление поставлены студенты:\n";
    foreach ( $studentsForExpulsion as $group => $valueArr ) {
        $studentsNames = implode(', ', $valueArr);
        $outStudentsForExpulsion .= " - из группы $group $studentsNames;\n";
    }
    print_r($studentsForExpulsion);
    $outStudentsForExpulsion = substr_replace($outStudentsForExpulsion,
        '.',
        strrpos($outStudentsForExpulsion, ';'),
        1);
    echo $outStudentsForExpulsion;
}
