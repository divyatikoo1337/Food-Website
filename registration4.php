<!DOCTYPE html>
<html lang="en">
 <script>
   function validate(){
     var name = document.getElementById("name");
     var email = document.getElementById("email");
     var pass = document.getElementById("password");
     var pass2 = document.getElementById("password2");


     if(name.value == ""){
       alert("Please enter a Name");
     }
     if(email.value == ""){
       alert("Please enter an email");
     }
     if(pass.value == ""){
       alert("Please enter a Password");
     }
     if(pass2.value == ""){
       alert("Please enter the confirmed password");
     }


   }
 </script>
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="registration.css">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
   <title>Registration</title>
</head>
<body>
  
    <div class="full-page">
       <div class="left">
       <h2 style="color:  #137a5e; font-family: 'Homemade Apple', cursive;  margin-left: 10px; font-size: 50px;">spicelane</h2>
 
     </div>
     <form onsubmit="validate()" method="post" action="registrationphp.php">
     <div class="right">
       <center>
           <h1>Create an Account</h1>           
           <div class="form-floating">
               <input type="text" name="name" class="form-control" id="name" placeholder=" Name" required>
           </div>
           <div class="form-floating">
               <input type="email" name="email" class="form-control" id="number" placeholder=" Email" required>
           </div>
           <div class="form-floating">
               <input type="password" name="pass" class="form-control" id="password" placeholder=" Password" required>
           </div>
           <div class="form-floating">
               <input type="password" name="cpass" class="form-control" id="password2" placeholder=" Confirm Password" required>
           </div>
           <button onclick="validate()">Sign up NOW </button>
       </center>


     </div>
     </form>
   </div>
</body>
</html>