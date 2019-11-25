<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<form method="POST">
	SEARCH BASED ON LOCATION:<br>
	<select id="city" class="" name="city">
  <option selected disabled="true">Name of city</option>
  <option id="mumbai" value="mumbai">Mumbai</option>
  <option id="delhi" value="delhi">delhi</option>
  <option id="chennai" value="chennai">Chennai</option>
 </select>
 <br>
 <button id="button" name="submit">SEARCH</button>
  <br><br>
</form>

<form method="POST">
	SEARCH BASED ON EVENT TYPE:<br>
	<select id="city" class="" name="toe">
  <option selected disabled="true">Type Of Event</option>
  <option  value="workshop">Workshop</option>
  <option  value="party">Party</option>
  <option  value="ceremony">Ceremony</option>
  <option  value="seminar">Seminar</option>
 </select>
 <br>
	<button value="search" name="event">SEARCH</button>
	<br><br>
</form>

<form method="POST">
	SEARCH BASED ON BUDGET:<br>
	<input size="71" type="number" name="budget"  placeholder="Enter budget"><br>
	<button value="search" name="budgetbutton">SEARCH</button>
</form>

</body>

<!-- <script type="text/javascript">
	
	document.getElementById("button").onclick = function() {

		if(document.getElementById("city") == document.getElementById("mumbai") {

			window.location.href = "nanda.html"; 
		} )
	}
</script>
 -->

<?php

session_start();

$link = mysqli_connect("localhost","root","","project");

if(mysqli_connect_error()) {
  
  die("there was an error");
}

if(isset($_POST['submit'])) {

if($_POST['city'] == "mumbai"){

	header("location:nanda.html");
}

else if($_POST['city'] == "delhi") {

	header("location:nanda1.html");
}

if($_POST['city'] == "chennai") {

	header("location:nanda2.html");
}

}

if(isset($_POST['toe'])) {

	if($_POST['toe'] == "workshop"){

	header("location:workshopf.php");
}

if($_POST['toe'] == "party"){

	header("location:partyf.php");
}

if($_POST['toe'] == "ceremony"){

	header("location:ceremonyf.php");
}

if($_POST['toe'] == "seminar"){

	header("location:seminarf.php");
}


}

if(isset($_POST['budgetbutton'])) {

	$_SESSION['budget'] = $_POST['budget'];

	header("location:budget.php");



}

  ?>





