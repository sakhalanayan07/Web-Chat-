<?php
session_start();
include 'connect.php';
?>

<html>
<head>
      <title>Home</title>  
       <link rel="stylesheet" type="text/css" href="css/home.css">       
</head>
<body>
<div id="main">
   <h1 style="color:white;">
   	<?php echo $_SESSION['name']?>
   	 ONLINE</h1>

   <div class="output"> 
   	  <?php
   	 


   	  $sql = "SELECT * FROM post" ;
   	  $result = $conn -> query($sql);
      
      
   	  if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         echo " ".$row["name"]. " "."::".$row["msg"]."........".$row["date"]."<br>";
            echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
   	  	
   	  
   	  	
   	  ?>
</div>

<form method="post" action="send.php">
	<textarea name="msg" placeholder="Type to send the message"class="form-control"></textarea><br>
<br>
	<input type="submit" value="send">
</form>

<form action="logout.php">
<input style="width:100%" type="submit" value="LOGOUT">

</form>

</div>
</body>
</html>
