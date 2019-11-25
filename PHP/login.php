<?php

session_start();

$link = mysqli_connect("localhost","root","","project");

if(mysqli_connect_error()) {
	
	die("there was an error");
}

if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

	if ( $_POST['email'] == '') {

		echo "email required" ;
	}

	else if( $_POST['password'] == '') {

		echo "password required";

	}

	else {

		$query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' and password='".mysqli_real_escape_string($link, $_POST['password'])."'";

		// $sql = mysqli_query("SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'");

		// $num_rows = mysql_num_rows($sql);

		// if($num_rows == 1)
		// 	{
		// 		echo "yes";
		// 		$rows = mysql_fetch_array($sql);
		// 		extract($rows);
				
		// 		$_SESSION['universalid'] = $userid;

		// }

		$result = mysqli_query($link ,$query);

		

		if ( mysqli_num_rows($result) > 0) {

			$rows = mysqli_fetch_array($result);
			extract($rows);
			$_SESSION['universalid'] = $userid;

			echo $_SESSION['universalid'];

			header("Location: image.php ");
		}



		// else {

		// 	$query = "INSERT INTO users (email,password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";

		// 	if (mysqli_query($link, $query)) {

		// 		echo "yes";
		// 	}

		// 	else {

		// 		echo "no";
		// 	}

		// }

		else {

			echo "not a old user or input are wrong";
		}
	}	


}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PAGE</title>

<style>

body {
	background-image: url("skyimage.jpg");
}
input[type=text], input[type=password] {
	width: 20%;
	padding: 10px 10px;
	margin: 8px ;
	border: 2px solid blue;
    border-radius: 4px;
}

button {
	background-color: #389AEE;
	padding: 14px 20px;
	margin: 8px 0;
	width: 20%;
	border-radius: 4px;
}

button:hover {
	opacity: 0.8;
}

.labelcolor {

	color: white;
}



</style>


</head>
<body>
<h1 id="login" class="labelcolor" style="margin-left: 650px;">Login Form</h1>

<form method="post" style="padding-left: 600px;">
	
		<label class="labelcolor"><b>Username</b></label>
		<input name="email" type="text" placeholder="Enter Username">
<br>
		<br><label class="labelcolor"><b>Password</b></label>
		<input name="password" type="password" placeholder="Enter Password">

		<br><br><button type="submit" id="event" style="padding-left: 150px;padding-right: 150px;">Login</button>
	
</form>

<form action="patel.php" >
			<button type="submit" style="margin-left: 600px;"> new user</button>
		</form>



</body>
</html>


