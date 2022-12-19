<?php

require 'User.php';
require 'Task.php';
require 'Comment.php';
require 'TaskService.php';

$user01 = new User('Вася', 'vasia@mail.ru');
$user02 = new User('Петя', 'petia@mail.ru');
$task = new Task($user01, 'Поспать');

TaskService::addComment($user02, $task, 'Первый комментарий Пети');
TaskService::addComment($user01, $task, 'Первый комментарий Васи');
TaskService::addComment($user01, $task, 'Второй комментарий Васи');
TaskService::addComment($user02, $task, 'Второй комментарий Пети');

print_r($task->getComments());