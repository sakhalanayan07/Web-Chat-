
<?php 
include 'connect.php';
$email=$_POST['Email'];

$sql= "SELECT * FROM signup where email='$email'";
$result=$conn->query($sql);

 if ($result -> num_rows == 1) 
{
header("Location:updation.php");
}
echo " no email registered";

?>
