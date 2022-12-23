<?php

class User
{
    private string $username;
    private array $tasks;

    public function __construct(string $username)
    {
        $this->username = $username;
        $this->tasks = [];
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function setTasks(Task $task): void
    {
        $this->tasks[] = $task;
    }

    public function deleteTask(Task $task): void
    {
        foreach ( $this->tasks as $key => $value ) {
            if ( $value == $task ) {
                unset($this->tasks[$key]);
            }
        }
    }
}