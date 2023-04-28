<?php 

    session_start();
    if(isset($_SESSION['email'])){

        session_destroy();
        header('Location: postLogout.html');
    }else{
        header('Location: noLogin.html');
    }

?> 