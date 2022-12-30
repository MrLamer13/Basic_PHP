<?php

class Task
{
    private int $id;
    private int $userId;
    private string $description;
    private bool $isDone = false;

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getId(): int
    {
        return $this->id;
    }

}