
<?php 
include 'connect.php';
$pass=$_POST['Pass'];
$pass1=$_POST['Pass1'];
if($pass==$pass1){

$sql= "UPDATE SIGNUP SET password='$pass'";
$result=$conn->query($sql);

echo " password updated ";
header("Location:index.php");
}
else{
	echo "enter password again";
header("Location:updation.php");
}
?>
