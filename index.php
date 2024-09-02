<?php

require_once('database/connect.php');
require_once('app/Http/Controllers/Auth/LoginUserController.php');

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$routes = [
  '/' => [
    'GET' => function () {
      echo 'main page';
    },
  ],
  '/register' => [
    'GET' => function () {
      include("resources/views/register.php");
    },
    'POST' => function () {
      echo 'Processing registration...';
    },
  ],
  '/login' => [
    'GET' => function () {
      include("resources/views/login.php");
    },
    'POST' => function () {
      login();
    },
  ],
];

if (isset($routes[$requestUri][$requestMethod])) {
  $routes[$requestUri][$requestMethod]();
} else {
  http_response_code(isset($routes[$requestUri]) ? 405 : 404);
}
