<!DOCTYPE html>
<html>
<head>
	<title>Firebase Push Notification</title>
</head>
<style type="text/css">
	html, body {
		height: 100%;
	}

	html {
		display: table;
		margin: auto;
	}

	body {
		display: table-cell;
		vertical-align: middle;
	}
	textarea {
		width: 300px;
		height: 150px;
	}
</style>

<body>
	<?php
	require_once 'database.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn,$sql);

	?>
	<?php
	//Displaying a success message when the notification is sent 
	if(isset($_REQUEST['success'])){
		?>
		<strong>Great!</strong> Your message has been sent successfully...
		<?php
	}
	?>

	<form action='send.php' method='post'>
		<select name='token'>
			<?php 
			//Traversing trhough all values 
			while($row = mysqli_fetch_array($result)){
			//displaying the values in a dropdown list 
				?>
				<option value='<?php echo $row['token'];?>'><?php echo $row['email'];?></option>

				<?php
			}
			?>
		</select><br /><br />
		<textarea name='message'></textarea><br />

		<button>Send Notification</button><br />
	</form>

</body>
</html>
<!-- Created by Ardhitya Wiedha Irawan -->