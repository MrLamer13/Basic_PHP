<?php
require_once 'model/Task.php';
require_once 'model/User.php';
require_once 'model/TaskService.php';

session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();

    $tasks = TaskService::getList($user);

    if ( isset($_GET['description']) && isset($_GET['action']) && ($_GET['action'] == 'isdone') ) {
        foreach ( $tasks as $task ) {
            if ( $task->getDescription() == $_GET['description'] ) {
                TaskService::executeTask($user, $task);
            }
        }
        unset($_GET['description'], $_GET['action']);
        header('Location: /?controller=tasks');
    }

    if ( isset($_GET['description']) && isset($_GET['action']) && ($_GET['action'] == 'delete') ) {
        foreach ( $tasks as $task ) {
            if ( $task->getDescription() == $_GET['description'] ) {
                TaskService::deleteTask($user, $task);
            }
        }
        unset($_GET['description'], $_GET['action']);
        header('Location: /?controller=tasks');
    }

    if ( isset($_GET['description']) && ($_GET['description'] != null) ) {
        $task = new Task($_GET['description']);
        if ( !in_array($task, $tasks )) {
            TaskService::addTask($user, $task);
        }
        unset($_GET['description']);
        header('Location: /?controller=tasks');
    }

    include "view/tasks.php";

} else {
    die('404');
}