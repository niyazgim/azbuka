<?php

function login() {
  unset($_SESSION['errors']);
  global $pdo;

  if(empty($_POST['email'])) {
    $_SESSION['errors']['email'] = 'Напишите email';
  }

  if(!empty($_SESSION['errors'])) {
    Header('Location: /login');
    return;
  }
  
  $create_user = $pdo->prepare('INSERT INTO `users`(`email`, `password`) VALUES (?,?)');
  $create_user->execute(array($_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT)));
  
  Header('Location: /');
  return;
}