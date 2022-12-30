<?php

require_once 'model/UserProvider.php';
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_POST['name'], $_POST['username'], $_POST['password01'], $_POST['password02'])) {
    ['name' =>$name, 'username' => $username, 'password01' => $password01, 'password02' => $password02] = $_POST;

    $userProvider = new UserProvider($pdo);

    if ( $password01 === $password02 ) {

        if ( $userProvider->checkedUserName($username) ) {
            $user = new User($username);
            $user->setName($name);
            $userProvider->registerUser($user, $password01);

            $user = $userProvider->getByUsernameAndPassword($username, $password01);
            $_SESSION['user'] = $user;
            header("Location: index.php");
            die();
        } else {
            $error = 'Пользователь с таким именем уже существует.';
        }

    } else {
        $error = 'Пароли не совпадают';
    }

}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    session_destroy();
}

include "view/register.php";