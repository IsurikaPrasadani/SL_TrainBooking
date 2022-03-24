<?php
    $hostname = "localhost";
    $un = "root";
    $pw =1996;
    $db = "TrainBooking";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }
    if(isset($_POST['login'])){

        $UserName   = mysqli_real_escape_string($con,$_POST['UserName']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
    
        if ($UserName != "" && $Password != ""){
    
            $sql_query = "select count(*) as cntUser from AdminLogin where UserName ='".$UserName ."' and Password='".$Password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['UserName '] = $UserName ;
                header('Location: AdminPanel.html');
            }else{
                echo "<script>alert('Invalid username or password!')</script>";
                header('Location: Admin.html');
                
            }
    
        }
    
    }
?>