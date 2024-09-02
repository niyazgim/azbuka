<?php

function login() {
  global $pdo;

  $create_user = $pdo->prepare('INSERT INTO `users`(`email`, `password`) VALUES (?,?)');
  $create_user->execute(array($_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT)));

  Header('Location: /');
  return;
}