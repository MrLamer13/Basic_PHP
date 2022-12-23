<?php

class TaskService
{
    public static function getList(User $user) : array
    {
        return $user->getTasks();
    }

    public static function addTask(User $user, Task $task) : void
    {
        $user->setTasks($task);
    }

    public static function executeTask(User $user, Task $task) : void
    {
        foreach ( $user->getTasks() as $value ) {
            if ( $value->getDescription() == $task->getDescription() ) {
                $value->markAsDone();
            }
        }
    }

    public static function deleteTask(User $user, Task $task) : void
    {
        foreach ( $user->getTasks() as $value ) {
            if ( $value->getDescription() == $task->getDescription() ) {
                $user->deleteTask($task);
            }
        }
    }

}