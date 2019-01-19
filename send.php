<?php

session_start();
include 'connect.php';
$msg=$_POST['msg'];
$name1=$_SESSION['name'];

$sql="insert into post(msg,name) values('$msg','$name1')";
$result=$conn->query($sql);

echo "message sent";

header("Location:home.php");
?>