<?php
session_start();
if(isset($_POST['logout']))
{
sesssion_destroy();
}

header("Location:index.php")

?>