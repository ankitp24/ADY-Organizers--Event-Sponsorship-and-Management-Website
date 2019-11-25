<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BOOTSTRAP</title>
  </head>

  <body>
  	<form method="POST">
  	 <label for="number">Enter Number Of Tickets</label><br>
      <input size="71" type="number" name="tickets"  placeholder="Enter Number" value="" required>
  
     

      <button name="submit" onclick="ticket()">go</button>

      </form>
</body>

       <?php

    session_start();

    $x = 100;


    $db = mysqli_connect("localhost", "root","","project");
    global $y;
    if(isset($_POST['submit'])) {
     $y = $_POST['tickets'];
    }
    
    $sql = "UPDATE users set balance=balance-($y*$x) WHERE userid = ".$_SESSION['universalid'];
    $result = mysqli_query($db, $sql);
    /*$sql = "SELECT balance FROM users WHERE userid = ".$_SESSION['universalid'];
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {

    	$x = 100;

    	$newbalance = $row['balance'] - $x;

    	$id = $_SESSION['universalid'];

    	 $sql ="INSERT INTO users (balance) values ($newbalance) WHERE userid = $id ";
    	$result1 = mysqli_query($db, $sql);


    }*/

    ?>


      <script>
function ticket() {
    alert("Tickets Booked!");
}
</script>
</body>
</html>
