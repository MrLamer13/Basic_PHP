<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

session_start();

$pdo = require 'db.php';
$username = null;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $username = $user->getUsername();
} else {
    header('Location: /');
    die();
}

$taskProvider = new TaskProvider($pdo, $user);
$tasks = $taskProvider->getTasks();

if ( isset($_GET['action']) && ($_GET['action'] === 'done') ) {
    $key = $_GET['key'];
    $taskProvider->executeTask($key);
    header('Location: /?controller=tasks');
    die();
}

if ( isset($_GET['action']) && ($_GET['action'] === 'delete') ) {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header('Location: /?controller=tasks');
    die();
}

if ( isset($_GET['action']) && ($_GET['action'] === 'add') ) {
    $taskDescription = strip_tags($_POST['description']);

    foreach ( $tasks as $value ) {
        if ( $value->getDescription() === $taskDescription ) {
            header('Location: /?controller=tasks');
            die();
        }
    }

    $task = new Task();
    $task->setDescription($taskDescription);
    $taskProvider->addTask($task, $user);
    header('Location: /?controller=tasks');
    die();
}

include "view/tasks.php";
