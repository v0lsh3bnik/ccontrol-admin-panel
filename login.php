<?php

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
  $loginQuery = $mysql->prepare("select * from users where username=? and password=?");
  $loginQuery->bind_param("ss", $_POST["username"], md5($_POST["password"]));
  $loginQuery->execute();
  $loginQuery->store_result();

  if ($loginQuery->num_rows > 0){
    session_start();
    $_SESSION["username"] = $_POST["username"];
    header("Location: /index.php");
  } else {
    echo "wrong password";
  }
}

?>

<html>

<form action="" method="post">
  <input type="text" name="username" placeholder="username">
  <input type="password" name="password" placeholder="*****">
  <input type="submit" name="submit" value="login">
</form>

</html>
