<?php

class TaskService
{
    public static function addComment(User $author, Task $task, string $text )
    {
        $comment = new Comment($author, $task, $text);
        $comment->getTask()->setComments($comment->getText(), $comment->getAuthor()->getUsername());
    }
}