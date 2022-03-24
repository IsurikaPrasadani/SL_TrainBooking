<?php
    $hostname = "localhost";
    $un = "root";
    $pw =1996;
    $db = "TrainBooking";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }

    if(isset($_POST["submit"])){
        $UserName = $_POST["UserName"];
        $FullName = $_POST['FullName'];
        $Contact = $_POST['Contact'];
        $Destination = $_POST['Destination'];
        $Age = $_POST['Age'];
        $class = $_POST["class"];
        $TicketType = $_POST["TicketType"];
		$Date = $_POST["Date"];
    }
    $sql= "INSERT INTO Booking( UserName , FullName , Contact , Destination , Age , class , TicketType , Date) 
    VALUES('$UserName','$FullName','$Contact','$Destination','$Age','$class','$TicketType','$Date')";

    if($con->query($sql))
    {
    echo "<script>alert('Record inserted ')</script>";
    header('Location: check bill.php');
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    header('Location: booking.html');
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="check bill.css">
	 <link rel="icon" type="image/ico" href="login.png" />
	<title>Booking</title>
<style>
  .onPage{
    text-align:center;
    font-family:sans-serif;
  }
</style>
</head>

<body>
<div class="head">

<div class="head">
    <img src="image/train2.jpg" width="1358px" height="80px">
  </div><br><br>

 <h1 class="onPage">Successfully Booked!</h1>
 <h4 class="onPage"><a href="index2.html" style="text-decoration: none;color: rgba(27, 25, 25, 0.904);">Back to home</a></h4>



</body>
</html>