<?php

require_once 'User.php';

class TaskProvider
{

    private PDO $pdo;

    private array $tasks;

    public function __construct(PDO $pdo, User $user)
    {
        $this->pdo = $pdo;
        $this->tasks = $this->fillTasksByDB($user);
    }

    private function fillTasksByDB(User $user): array
    {
        $result = [];
        $statement = $this->pdo->prepare(
            'SELECT id, description, isDone FROM tasks WHERE userId = :userId'
        );
        $statement->execute([
            'userId' => $user->getId()
        ]);
        while ( $task = $statement->fetchObject(Task::class) ) {
            $result[] = $task;
        }
        return $result;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function addTask(Task $task, User $user): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (userId, description, isDone) VALUES (:userId, :description, :isDone)'
        );

        return $statement->execute([
            'userId' => $user->getId(),
            'description' => $task->getDescription(),
            'isDone' => $task->getIsDone()
        ]);
    }

    public function deleteTask(int $key): bool
    {
        $statement = $this->pdo->prepare(
            'DELETE FROM tasks WHERE id = :id'
        );
        return $statement->execute([
            'id' => $key
        ]);
    }

    public function executeTask(int $key): bool
    {
        $statement = $this->pdo->prepare(
            'UPDATE tasks SET isDone = :isDone WHERE id = :id'
        );
        return $statement->execute([
           'isDone' => true,
           'id' => $key
        ]);
    }


}