<?php

echo 'login page';

?>

<form action="/login" method="POST">
  <input type="email" name="email" id="">
  <p style="color:red"><?=$_SESSION['errors']['email']?></p>
  <input type="password" name="password" id="">
  <button type="submit">Login</button>
</form>