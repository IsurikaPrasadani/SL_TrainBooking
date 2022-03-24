<?php
    $hostname = "localhost";
    $un = "root";
    $pw =1996;
    $db = "TrainBooking";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }
    $result = mysqli_query($con, "SELECT MAX(UserId) AS maximum FROM User");
    $row = mysqli_fetch_assoc($result);
    $currentId = $row['maximum'];
    $nextId = $currentId+1;

    $result1 = mysqli_query($con, "SELECT GovRegisteredName AS name FROM RailwayDepartment");
    $row1 = mysqli_fetch_assoc($result1);
    $name = $row1['name'];

    if(isset($_POST["submit"])){
        $UserName = $_POST["UserName"];
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $ContactNumber = $_POST['ContactNumber'];
        $Password = $_POST["Password"];
        
    }
    $sql= "INSERT INTO User( UserName , UserId , FirstName , LastName , Email , ContactNumber ,GovRegisteredName) 
    VALUES('$UserName','$nextId','$FirstName','$LastName','$Email','$ContactNumber','$name')";

    $sql1= "INSERT INTO NormalUserLogin( UserName, Password) VALUES('$UserName','$Password')";

    if($con->query($sql))
    {
    echo "<script>alert('Record inserted ')</script>";
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    }

    if($con->query($sql1))
    {
    echo "<script>alert('Record inserted ')</script>";
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    }
    $con->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="icon" href="images/logo.gif" type="image/gif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="login.css">
  <div class="head">

	<img src="image/train2.jpg" width="1540px" height="80px">
	</div>
</head>
<body>

  <div class="sidenav">
    <nav>
      <!--<ul class="nav-list" style="font-family: sans-serif;">
        <li><a href="contact.html">CONTACT US</a></li>
        <li><a href="Government facilities.html">GOVERNMENT FACILITIES</a></li>
        <li><a href="registration.html">REGISTRATION</a></li>
        <li><a href="booking.html">BOOKING</a></li>
        <li><a href="check bill.html">CHECK BILL INFO</a></li>
        <li><a href="Login.html">LOGIN</a></li>
        <li><a href="Our Services.html">SERVICES</a></li> 
        <li><a href="aboutus.html">ABOUT</a></li>
        <li><a class="active" href="#">HOME</a></li>-->
        
        
      </ul>
    </nav>
  </div>
  <div style="text-align: center; color: #fff;"><h2>Successfully Registered!</h2><br>
    <h3>Please Login To Continue..</h3>   </div>
	 <br><br>
  <form method="POST" action="normaluserlogin.php">
  	<div class="input-group">
  		<label>UserName</label>
  		<input type="text" name="UserName" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="Password">
  	</div>
  	<div class="input-group">
  		<input type="submit" value="Login" name="signin" class="button btn btn-default" style="text-align: center;">
  	</div>
  	<p>
  		Not yet a register? <a href="registration.html">Sign up</a>
  	</p>
  </form>
 
  <br><br><br><br><br><br>
  <h4><marquee id="mtext1" direction="left" bg>NIBM Software Engineer Students 2019</marquee></h4>
 

  </div>
  <footer>
    <ul>
  <a>2019- DSE 19.2 All the Rights Reserved. </a>
  <a>        last Update : 2021.07.06</a>
  
        </ul>
    </footer>
</body>
</html>