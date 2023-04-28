<?php
  session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "spicelane";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo "unsuccessful server connection";
    }else{
                $email = $_SESSION['email'];
            $dishName = $_POST['dish_name'];
            $dishPrice = $_POST['dish_price'];
        if(isset($email)){
            $query = "select * from cart where email='$email' and dishName='$dishName'";
            $result = mysqli_query($conn, $query);
            $count= mysqli_num_rows($result);

            if($result && $count>0){
            //     echo"Already in Cart";
            //     header('Location: menu.html');
            // }else{
                $sql = "INSERT INTO `cart` (`email`, `dishName`, `dishPrice`) VALUES ('$email', '$dishName', '$dishPrice')";
                $result2 = mysqli_query($conn, $sql);
                header('Location: menu.html');

              }
        }else{
          header('Location:menuLogin.html');
        }


    }
?>
