<!DOCTYPE html>
<html>
<head>
	<title>GUEST LIST FOR GOOD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			#banner{
				display: grid;
				height: 100%;
				width: 100%;
				position: relative;
				text-align: center;
				color: white;
			}

			.button {
	background-color: #4CAF50;
	padding: 14px 20px;
	/*margin: 8px 0;
	width: 20%;*/
}

.button1 {
	background-color: #4CAF50;
	padding: 14px 20px;
	/*margin: 8px 0;
	width: 20%;*/
}



			.image {

				width: 100%;
				height: 100%;
			}

			#bannerimg {
				max-width: 100%;
				max-height: 100%

			}

			.img_heading{
				position: absolute;
   				top: 50%;
    			left: 50%;
    			transform: translate(-50%, -50%);
    			color: white;
			}

			/*#countdown {
			  text-align: center;
			  font-size: 60px;
			  margin-top: 0px;
			  color: white;
			}

			.countdown1{
				position: absolute;
   				bottom: : 1%;
    			left: 50%;
    			transform: translate(-50%, -50%);
    			color: white;
			}*/
			/*sponrange*/
			.sponsorshiprange{
				display: grid;
				height: 100%;
				position: relative;
				text-align: center;
				color: white;
				
			}

			.sponsorshiprange .sponbutton {
			    position: absolute;
			    top: 40%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			    -ms-transform: translate(-50%, -50%);
			    background-color: #555;
			    color: white;
			    font-size: 16px;
			    padding: 12px 24px;
			    border: none;
			    cursor: pointer;
			    border-radius: 5px;
			    text-align: center;
			}

			.sponsorshiprange .sponbutton:hover {
			    background-color: black;
			}

			.sponrange {
				font-size: 50px;
				color: black;
			    position: absolute;
			    top: 10%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}

			/*sponrangeends*/
			.eventdesc{
				border: 5px;
				color: black;
			}


			ul { position: fixed;
			top: 0;
			list-style-type: none; 
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color:#333; 
			width: 100%;
		}

		li{
			float: left;
			display:inline;
		}

		li a {

			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color:green; 
		}

		li a:hover:not(.active) {
			background-color:#111; 
		}

		.active{
			background-color: #4caf50;
		}
		</style>

	
</head>
<body>
	<!--  Navbar(sit on top)  -->
	<div class="Nav">
		<div >
				<ul>
					<li><a href="#home" class="active"><b>ADY </b><b>SOLUTIONS</b></a></li>
					<li style="float: right"><a href="#about">ABOUT</a></li>
					<li style="float: right"><a href="#contact">CONTACT  </a></li>
					<li style="float: right"><a href="#events">EVENTS  </a></li>

				</ul>
			</div>
		</div>
	</div>
	<!-- Banner -->
<div class="banner">
	 <?php

    session_start();

    $db = mysqli_connect("localhost", "root","","project");
    $sql = "SELECT image FROM image WHERE userid = ".$_SESSION['universalid'];
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {

   
    echo "<div class='img'>";
      echo "<img src='jp/".$row['image']."' class='image' >";
    echo "</div>";

  }

    session_write_close();

    ?>
</div>
<br><br><br>
		<!-- ABOUT EVENT -->
<div class="eventdesc">
			<?php

    session_start();

    $db = mysqli_connect("localhost", "root","","project");
    $sql = "SELECT description FROM image WHERE userid = ".$_SESSION['universalid'];
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {


    echo "<div id='img_div'>";
      echo "<p>".$row['description']."</p>";
    echo "</div>";

  }

    session_write_close();

    ?>
</div>
<br>
<br>
<br>

<div style="float: left; width: 130px" > 
 <form method="POST" action="country.html">
  <button type="submit" class="button">ALL events</button>

  </form>
  </div>
    <div  width: 225px" > 
  <form method="POST" action="tickets.php">
    <button type="submit" class="button1">BOOK</button>
  </form>
  <form method="POST" action="sponsorform.php">
  <button type="submit" class="button">Interested</button>

  </form>
</div>

<br>

	
<div class="sponsorameinities">
	<img src="sponsoroptions.png" width="100%" height="50%" style="border: 5px">
	<img src="sponsoroffers.png" width="100%" height="50%" style="border: 5px">
</div>

</body>
</html>