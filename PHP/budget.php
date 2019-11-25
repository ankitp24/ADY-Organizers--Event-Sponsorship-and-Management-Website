<?php

session_start();

$link = mysqli_connect("localhost","root","","project");

if(mysqli_connect_error()) {
  
  die("there was an error");
}



$query = "SELECT image,description,link,imageid from image WHERE budget < ".$_SESSION['budget'];

$result = mysqli_query($link , $query);

while ($row = mysqli_fetch_array($result)) {


     # code...
    echo "<div class='img'>";
      echo "<a href={$row['link']}". "?image1=". $row['imageid'] ." ><img src='jp/".$row['image']."' class='image' >";
      echo "<br><br>";
  
    



	echo "<p>".$row['description']."<p>";

	echo "<br><br>";
    echo "</div>";

    

    // $_SESSION['image'] = $row['imageid'];

  }