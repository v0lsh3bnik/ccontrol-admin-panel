<?php

// sudo mysql -u root -p localhost 
// scp serv_main root@ip:/home/www/
// create table users(id int AUTO_INCREMENT primary key, username varchar(255), password varchar(255));
// create table victims(id int AUTO_INCREMENT primary key, hostname varchar(255), ip varchar(255), os text, cmd text, cmdresult longtext);
// ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'pass';

$mysql = mysqli_connect('localhost', 'root', '94ae75c5bad4722c', 'ControlPanel');
if (mysqli_connect_errno()){
  echo 'Failed to connect to db: ' . mysqli_connect_errno();
}

 ?>
