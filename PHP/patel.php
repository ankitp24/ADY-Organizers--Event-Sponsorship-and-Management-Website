 <?php

$link = mysqli_connect("localhost","root","","project");

 $bal = rand(1000,5000);

if(mysqli_connect_error()) {
  
  die("there was an error");
}

if ( array_key_exists('username', $_POST) OR array_key_exists('cno', $_POST) OR array_key_exists('email', $_POST)  OR array_key_exists('budget', $_POST)) {

 

   if( $_POST['username'] == '') {

    echo "password required";

  }

  else if ( $_POST['cno'] == '') {

    echo "email required" ;
  }

  if ( $_POST['email'] == '') {

    echo "email required" ;
  }

  

  

    else {

    $query = "SELECT id FROM nanda WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

    $result = mysqli_query($link ,$query);

    if ( mysqli_num_rows($result) > 1) {

      echo "email already taken";
    }

   

    else {

      $query = "INSERT INTO nanda (username,password,email) VALUES ('".mysqli_real_escape_string($link,$_POST['username'])."','".mysqli_real_escape_string($link,$_POST['cno'])."','".mysqli_real_escape_string($link,$_POST['email'])."')"; 

      $query = "INSERT INTO users(email,password,balance) VALUES('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['cno'])."',$bal)";



      $result = mysqli_query($link, $query);



        header("Location:login.php");
    

      

    }
  
}

}

if(array_key_exists('username', $_POST)) {

$query = "SELECT id FROM nanda WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."'";

    $result = mysqli_query($link ,$query);

    if ( mysqli_num_rows($result) > 1) {

      echo "username already taken";
    }

    else {

      $query = "INSERT INTO image (username) VALUES ('".mysqli_real_escape_string($link, $_POST['username'])."')";

      if(mysqli_query($link, $query)) {

        echo "yes";
      }

      else {

        echo "no";
      }
    }

  }

  
?> 

<!DOCTYPE html>
<html>
<head>
  <style media="screen">
  div.form
{
    display: block;
    text-align: center;
   
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
      background-image: url("loginparty.jpg"),
                        url("educational1.jpg"),
                        url("sports.jpg");
    }
    button {
     background-color: #a8d0e6;
height:30px;
border:2px solid #A6B1B0;
border-radius: 4px;
float:left;
text-align:center;
cursor:pointer;
position:relative;
box-sizing:border-box;
overflow:hidden;
margin:0 0 40px 0;
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
    input[type=text], input[type=password], input[type=email], input[type=number]{

      border: 2px solid #A6B1B0;
    border-radius: 4px;
    }
  </style>
</head>
 <h1><en>Basic details</en></h1>
  <body>
    <div class="form">
    <form  method="POST">
      
      <label for="username">User Name</label><br>
      <input size="71" type="text" name="username" placeholder="User Name" value="" required>
      <br><br>
      <label for="cno">password</label><br>
      <input size="71" type="password" name="cno" value="" required><br>
      <!-- <input type="checkbox" onclick="myFunction()">Show Password
        <script type="text/javascript">
        function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
        </script>
        <br><br> -->

        <br>
      
      <label for="email">Email</label><br>
      <input size="71" type="email" name="email"  placeholder="Email ID" value="" required>
      <br><br>

      

     <!--  <label for="budget">Enter your budget</label><br>
      <input size="71" type="number" name="budget"  placeholder="Enter budget" value="" required>
      <br><br> -->

      <button type="submit">SUBMIT
      </button>
    </form>

</body>
</html>
