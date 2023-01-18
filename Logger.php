<?php

class Logger
{
    private string $name;
    public function __construct(string $name = 'default')
    {
        $this->name = $name;
    }
    public function log(string $message): void
    {
        $name = $this->name;
        $fileName = $name . '.log';
        $date = new DateTime();
        $dateFormatted = $date->format('Y-m-d H:i:s');
        $logMessage = "$dateFormatted - $name: $message\n";
        file_put_contents($fileName, $logMessage, FILE_APPEND);
    }
}