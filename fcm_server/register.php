<?php 

	if (isset($_POST["token"])) {
		
		   $_token=$_POST["token"];
		   $_email=$_POST["email"];

		   $conn = mysqli_connect("localhost","root","s4rdj1t01q2w3e4rdb","fcm") or die("Error connecting");

		   $sql="INSERT INTO users (token,email) VALUES ( '$_token','$_email') ON DUPLICATE KEY UPDATE token = '$_token';";
           
	
	//executing the query to the database 
	if(mysqli_query($conn,$sql)){
		echo 'success';
	}else{
		echo 'failure';
	}

     

      mysqli_close($conn);

	}


 ?>
