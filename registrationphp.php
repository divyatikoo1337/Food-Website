<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "spicelane";


   $conn = mysqli_connect($servername, $username, $password, $database);


   if(!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
   }
    else{

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $sql = "INSERT INTO `registration` (`name`,`email`, `password`, `cpassword`) VALUES ('$name', '$email', '$pass', '$cpass')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "The record has been inserted successfully successfully!<br>";
        header('Location:login.html')
;    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
    }
    
?>