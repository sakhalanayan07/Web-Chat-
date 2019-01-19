<?php

$conn=mysqli_connect("localhost","root","","xyz") ;
if(!$conn){

	die("connection failed".mysqli_connect_error());
}
echo "CONNECTED";

?>