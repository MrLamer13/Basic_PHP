<?php

$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

require_once $routes[$controller] ?? die('404');