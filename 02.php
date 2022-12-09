<?php

$name = readline("Введите Ваше имя. ");

do {
    $numberOfTasks = (int)readline("Введите количество задач на сегодня. От 1 до 10. ");
} while ( $numberOfTasks < 1 || $numberOfTasks > 10 );

$allTime = 0;

for ( $i = 1; $i <= $numberOfTasks; $i++ ) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline("Какая задача стоит перед вами сегодня? ");
    $$time = (int)readline("Сколько примерно времени эта задача займет? ");
    $allTime += $$time;
}
echo "$name, сегодня у вас запланировано $numberOfTasks приоритетных задачи на день:\n";
for ( $i = 1; $i <= $numberOfTasks; $i++ ) {
    $task = "task$i";
    $time = "time$i";
    echo "- {$$task} ({$$time}ч)\n";
}
echo "Примерное время выполнения плана = {$allTime}ч";