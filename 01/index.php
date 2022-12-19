<?php

require 'User.php';
require 'Task.php';

$user = new User('Вася', 'vasia@mail.ru');
$task01 = new Task($user, 'Поспать');
$task02 = new Task($user, 'Пожрать');

testTask($task01);

$task01->setDescription('Поспать подольше');
$task01->setPriority(10);
$task01->markAsDone();

testTask($task01);

testTask($task02);

$task02->markAsDone();

testTask($task02);

function testTask(Task $task): void
{
    echo $task->getUser().PHP_EOL;
    echo $task->getDescription().PHP_EOL;
    echo $task->getPriority().PHP_EOL;
    echo $task->getIsDone().PHP_EOL;
    echo $task->getDateCreated().PHP_EOL;
    echo $task->getDateUpdated().PHP_EOL;
    echo $task->getDateDone().PHP_EOL;
    echo PHP_EOL;
}