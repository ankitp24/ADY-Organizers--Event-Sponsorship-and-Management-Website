<?php

session_start();

	$msg = "";
 
	if(isset($_POST['Upload'])) {

		$target = "jp/".basename($_FILES['image']['name']);

		$db = mysqli_connect("localhost","root","","project");

		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		$link1 = $_POST['link1'];
		$event = $_POST['eventype'];
		$city = $_POST['city'];
		 $budget = $_POST['budget'];

		print_r($_SESSION['universalid']);
		$sql = "INSERT INTO image (userid, image, description, link, eventname, city,budget) VALUES ('{$_SESSION['universalid']}', '$image', '$text', '$link1', '$event', '$city', '$budget' )";
		 $result = mysqli_query($db, $sql);


		// $sql = "SELECT link FROM image where userid = '{$_SESSION['universalid']}'";

		// $result = mysqli_query($db, $sql);

		// if ( mysqli_num_rows($result) > 0) {

		// 	$rows = mysqli_fetch_array($result);
		// 	extract($rows);
		// 	$_SESSION['link'] = $link;

		// 	//echo $_SESSION['universalid'];

		// 	header("Location: boot.php ");
		// }


		 	header("location:g4g1.php");
		 

		

		 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

		 	$msg = "success";
		 }
		 else {

		 	$msg = "no";
		 }
		}

	




?>





<html>
<head>
<title>IMAGE UPLOAD</title>
<style media="screen">
  
  input[type=text], input[type=password], input[type=email], input[type=number]{

      border: 2px solid #A6B1B0;
    border-radius: 4px;
    }

  div.form
{
    display: block;
    text-align: center;
     padding-top: 40px;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}
h1 {
   text-align:center;
}
    body{
      background-color:rgb(211,211,211);
      background-image: url("events6.jpg"),
                        url("educational1.jpg"),
                        url("sports.jpg");
    }
    button {
    background-color: #B2EE38;
height:30px;
border:2px solid #B2EE38;
border-radius: 4px;
float:left;
text-align:center;
cursor:pointer;
position:relative;
box-sizing:border-box;
overflow:hidden;
margin:270px 0 26px 0;
    }
    button:hover {
     opacity: 0.8;
    }
    h1{
      color: white;
    }
    form{
      color: white;
    }

    input[type=submit] {
    	background-color: #B2EE38;
height:30px;
border:2px solid #B2EE38;
border-radius: 4px;
float:left;
text-align:center;
cursor:pointer;
position:relative;
box-sizing:border-box;
overflow:hidden;
margin:0 0 40px 0;
    }

    input[type=submit]:hover{
    	opacity: 0.8;

    }

    .book {

    	right:180px; 
    }
  

  </style>
</head>
<body>
<div class="form">

		
	<form method="POST"  enctype="multipart/form-data">
	<br>
 	<input type="file" name="image">
 	<br><br>
 	<textarea  name="text"  cols="40" rows="4" placeholder="say something..."></textarea>
 	<br><br>
 	<textarea  name="link1"  placeholder="Enter link"></textarea>
 	<br><br>
 	<!-- <textarea  name="eventype"  placeholder="Enter type of event"></textarea>
 	<br><br> -->
 	<select class="" name="eventype">
  <option selected disabled="true">Type of event</option>
  <option value="workshop">workshop</option>
  <option value="party">party</option>
  <option value="ceremony">ceremony</option>
  <option value="seminar">Seminar</option>
 </select>
 <br><br>
 	<!-- <textarea  name="city"  placeholder="Enter city"></textarea>
 	<br><br> -->
 	<select class="" name="city">
  <option selected disabled="true">Name of city</option>
  <option value="mumbai">Mumbai</option>
  <option value="delhi">delhi</option>
  <option value="chennai">Chennai</option>
 </select>
  <br><br>

  <input size="71" type="number" name="budget"  placeholder="Enter budget"  required>
      <br><br>

 <input type="submit" name="Upload" value="Upload Image">
 	<br><br>
 	<br><br>

 	

</form>

<form action="country.html">
 <button type="submit" name="BOOK" class="book" value="BOOK TICKETS">book tickets</button>
</form>




	

</body>
</html>