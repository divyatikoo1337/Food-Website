
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "spicelane";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{
        
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $query = "select * from registration where email='$email' and password='$pass'";
        $result = mysqli_query($conn, $query);
        $count= mysqli_num_rows($result);
        if($count>0){
            echo"Successful Login";
            session_start();
            $_SESSION['email'] =  $email;
            header('Location: postlogin.html');
        }else{
            header('Location:wrongLogin.html');
        }
       
    }

?>

