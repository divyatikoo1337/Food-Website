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
        // echo "hi";
        $email = $_POST['email'];
        // echo $email;
        $pass = $_POST['pass'];
        // echo $pass;
        $demail = $_POST['dEmail'];
        // echo $demail;
        // if(!isset($email)){
        //     echo "Enter the email ID";
        //     exit;
        // }
        // if(!isset($pass)){
        //     echo "Enter the Admin password";
        //     exit;
        // }
        // if(!isset($demail)){
        //     echo "Enter the deletion email ID";
        //     exit;
        // }

        $query = "select * from registration where email='$demail' ";
        $result = mysqli_query($conn, $query);
        $query2 = "select * from admin where email='$email' and password='$pass'";
        $result2 = mysqli_query($conn, $query2);

         $count1= mysqli_num_rows($result);
        //  echo $count1;
         $count2= mysqli_num_rows($result2);
        //  echo $count2;

        if($count1>0 && $count2>0){
        // if($count1>0){
            $query3 = "DELETE FROM reservation WHERE email='$demail'";
            $r = mysqli_query($conn, $query3);
            // if($r){
            // alert('Successful Deletion');
            header('Location: index.html');
            // }
            echo $count1;
        }else{
            // alert('please try again! Wrong Credentials');
            // header('Location:admin.html');
            
        }
    }

?>