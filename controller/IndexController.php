<?php
require_once 'model/User.php';
session_start();

$pageHeader = 'Добро пожаловать';

$username = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $username = $user->getUsername();
}

include "view/index.php";