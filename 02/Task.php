<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private ?DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private array $comments;

    public function __construct(User $user, string $description, int $priority = 0)
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->dateCreated = new DateTime();
        $this->isDone = false;
        $this->comments = [];
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(string $comment, string $authorName): void
    {
        $this->comments[$authorName][] = $comment;
    }



    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDateCreated(): string
    {
            return $this->dateCreated->format('d.m.Y H:i:s');
    }

    public function getDateUpdated(): string
    {
        if ( isset($this->dateUpdated) ) {
            return $this->dateUpdated->format('d.m.Y H:i:s');
        } else {
            return 'Обновлений не было';
        }
    }

    public function getDateDone(): string
    {
        if ( $this->isDone ) {
            return $this->dateDone->format('d.m.Y H:i:s');
        } else {
            return 'Не выполнено';
        }

    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getIsDone(): string
    {
        if ( $this->isDone ) {
            return 'Выполнено';
        } else {
            return 'Не выполнено';
        }
    }

    public function getUser(): string
    {
        return $this->user->getUsername();
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
        $this->dateUpdated = new DateTime();
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

}