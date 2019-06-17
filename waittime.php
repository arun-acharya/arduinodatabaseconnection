<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'arduino';
 
$link = mysqli_connect($host, $user, $password, $database);
$query = "select time from timer where Name = 'waittime'";
$result = mysqli_query($link, $query);

while ($data = mysqli_fetch_assoc($result)) { 
	echo $data['time'];
}   


?>