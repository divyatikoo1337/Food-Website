<?php
    session_start();
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
        if(!isset($name)){
            echo "Please enter the name";
            exit;
        }
        $email = $_POST["email"];
        if(!isset($email)){
            echo "Please enter the email";
            exit;
        }
        $no = $_POST["number"];
        if(!isset($no)){
            echo "Please enter the number";
            exit;
        }
        $nop = 2;
        $date = $_POST["date"];
        if(!isset($date)){
            echo "Please enter the date";
            exit;
        }
        $q = "SELECT * FROM reservation";
        $qr = mysqli_query($conn, $q);
        $r = mysqli_num_rows($qr);
        if($r<10){
 
    $sql = "INSERT INTO `reservation` (`name`, `email`, `number`, `nop`, `date`) VALUES ('$name', '$email', '$no', '$nop', '$date')";
    $result = mysqli_query($conn, $sql);
        
    if($result){
        
        header('Location:confirmTable.html');
    }
    else{
        echo "Sorry! There seems to be an error ". mysqli_error($conn);
    }
}else{
    header('Location: noTables.html');
}
    
    }
    
?>