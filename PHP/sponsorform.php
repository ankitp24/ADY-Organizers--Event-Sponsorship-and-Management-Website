<!DOCTYPE html>
<html>
<head>
	<title>Sponsor form</title>
	<style type="text/css">

	body {
	background-image: url("skyimage.jpg");
}

	 input[type=text], input[type=password], input[type=email], input[type=number]{

      border: 2px solid #A6B1B0;
    border-radius: 4px;
    }

    .labelcolor {

	color: white;
}

 input[type=submit] {
    	background-color: #389AEE;
    	height: 40px;
    	border-radius: 4px;
    }
		
	</style>
</head>
<body>
	<div>
		<form  method="post" name="form">
			<ul style="font-size: 20px; list-style-type: none;">
				<li><label class="labelcolor">Name:</label> <br><input type="text" name="name"  class="text"><br><br></li>

				<li><label class="labelcolor">Company Name:</label><br><input type="text" name="companyname" class="text"><br><br></li>

				<li><label class="labelcolor">Email-Id:</label><br><input type="email" name="emailid" class="text"><br><br></li>

				<li><label class="labelcolor">Contact No:</label><br><input type="number" name="contactno" class="text"><br><br></li>

				<li><label class="labelcolor">Time to contact:</label><br><input type="time" name="timeofcontact" min="08:00" max="17:00"><br><br></li>

				<li><label class="labelcolor">Comment:</label><br><textarea rows="4" cols="50" name="comment"></textarea><br><br></li>

				<li><input type="submit"  value="Submit" name="submit"></li>
			</ul>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$companyname=$_POST['companyname'];
		$email_id=$_POST['emailid'];
		$contactno=$_POST['contactno'];
		$time=$_POST['timeofcontact'];
		$msg=$_POST['comment'];

		$from='yash_1398@yahoo.com';
		$to='shahdharmil61@gmail.com';
		$subject='Interested sponsor details';
		$message="Hello this is to inform you that the sponsor".$name."is interseted in your event.The contact details of the sponsor are as follows ".
		$companyname. ",".$email_id.",".$contactno.",Time to contact:".$time.".Additional message:".$msg.".";
		// $headers="From:".$from;

		if(mail($to, $subject, $message)){
			echo "Thank You!!!";
		}

		else{
			echo "Something went wrong.";
		}
	}
?>