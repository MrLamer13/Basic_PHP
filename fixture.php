<?php

$pdo = require 'db.php';
require_once 'model/UserProvider.php';

$pdo->exec('CREATE TABLE users (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
name VARCHAR(150),
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)');

$user = new User('admin');
$user->setName('Vasia Pupkin');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    userId INTEGER NOT NULL,
    description VARCHAR(300) NOT NULL,
    isDone TINYINT NOT NULL 
)');