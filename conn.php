<?php

// sudo mysql -u root -p localhost 
// scp serv_main root@ip:/home/www/
// create table users(id int AUTO_INCREMENT primary key, username varchar(255), password varchar(255));
// create victims(id int AUTO_INCREMENT primary key, hostname varchar(255), ip varchar(255), os text, username varchar(255), tmp_path varchar(255), is_admin varchar(255), pwd varchar(255), process_name varchar(255), file_name varchar(255), process_id varchar(255), cmd text, cmdresult longtext);
// ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'pass';

$mysql = mysqli_connect('localhost', 'root', '94ae75c5bad4722c', 'ControlPanel');
if (mysqli_connect_errno()){
  echo 'Failed to connect to db: ' . mysqli_connect_errno();
}

 ?>
