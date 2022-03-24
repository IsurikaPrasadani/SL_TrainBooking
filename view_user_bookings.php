<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="view_user_bookings.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="image/ico" href="login.png" />
	<title>Check Booking info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
  <link rel="stylesheet" href="./css/bootstrap.css">

  <style>
    .sidenav nav ul li:hover{
    box-shadow: inset 0 0 0 2px #fff;
    border-radius: 20px;
}
  </style>
</head>

<body>
<div class="head">
    <img src="image/train2.jpg" width="1358px" height="80px">
  </div><br><br>

 

  <div class="sidenav" style="margin-top: -2.2%;">
  <nav>
          <ul class="nav-list" style="font-family: sans-serif; color: #fff;">
            <li><a href="./logoutadmin.php" style="color: #fff;">LOGOUT</a></li>
            <li><a href="./check bill.php" style="color: #fff;">CHECK USER BOOKINGS</a></li>
            <li><a class="active" href="AdminPanel.html" style="color: #fff;">HOME</a></li>
          </ul>
        </nav>
  </div>
	
<!--<div class="imgcontainer">
    <img src="image12.jpg" alt="Avatar" class="avatar">
  </div>

<form action="#" method="POST">
  <div class="container">
    
 
  <input type="text" class="form-control" name="UserName" placeholder="Enter User Name"/><br>
    <input id="btn1" type="submit" name="check" value="Check"> <br>
    <input id="btn2" type="reset" name="cancel" value="Cancel">
    </div>-->

    <div>
      <table class="table table-dark">
        <tr>
          <th>User Name</th>
          <th>Full Name</th>
          <th>Contact</th>
          <th>Destination</th>
          <th>Age</th>
          <th>class</th>
          <th>TicketType</th>
          <th>Date</th>
        </tr><br>
        <?php
          $con = mysqli_connect("localhost","root",1996,"TrainBooking");
          if($con-> connect_error){
              die("Connection failed". $con-> connect_error);
          }

          $sql = "SELECT * FROM booking";
          $result = $con-> query($sql);

          if($result-> num_rows > 0){
              while($row = $result-> fetch_assoc()){
                echo "<tr>
                <td> ". $row['UserName'] ."</td>
                <td> ". $row['FullName'] ."</td>
                <td> ". $row['Contact'] ."</td>
                <td> ". $row['Destination'] ."</td>
                <td> ". $row['Age'] ."</td>
                <td> ". $row['class'] ."</td>
                <td> ". $row['TicketType'] ."</td>
                <td> ". $row['Date'] ."</td></tr>";
              }
              echo "</table>";
          }
          else{
            echo "0 result";
          }
          $con-> close();

          
        ?>
    </div>
    <br><br><br><br>
         
    

    </form>
    <h4><marquee id="mtext1" direction="left" bg style="margin-bottom: 4px;">NIBM Software Engineer Students 2019</marquee></h4>
    <br><br><br><br>

    <footer>
      <div class="footer">
        <h4>2019- DSE 19.2 All the Rights Reserved. </h4>
        <h6>last Update : 2021.07.06</h6>
      </div>
    </footer>

</body>
</html>
