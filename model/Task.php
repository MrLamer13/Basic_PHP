<?php

class Task
{
    private string $description;
    private bool $isDone;

    public function __construct(string $description)
    {
        $this->description = $description;
        $this->isDone = false;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
    }

}