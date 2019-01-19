<?php
session_start();
include 'connect.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()){
	echo "no connection";
	header("Location:index.php");
}
else {
	$_SESSION['name']=$_POST['uname'];

	header("Location:home.php");
}