<?php
   include("config.php");
  
   ?>
<html>
   
   <head>
      <title>Welcome to CU Li</title>
    <link href="../ex_files/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
   
      <div class = "container">
      <div class = "col-md-4">

      </div>
      <div class = "col-md-4">
     <br><br><br><center> <img src="../ex_files/question-mark.jpg" class="" alt="" width="150px" height="150px">
         <h3 style="float:center;">Login</h2> 
         <h4 style="float:center;">Enter Username and Password</h2> </center>
       
      
         <form role = "form"  action = "check_login.php" method = "post">
            <div class="form-group" style="padding-top:20px;"><input type = "text" class = "form-control" 
               name = "txtUsername" placeholder = "username" 
               required autofocus></div>
            <div class="form-group"><input type = "password" class = "form-control"
               name = "txtPassword" placeholder = "password" required></div>
            <div class="form-group"><button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button></div>
            <a href="../askform.html"><img style="padding-left:140px;" src="../ex_files/goback.jpg" alt=""></a>
         </form>
         
        
      
      <div class="col-md-4"></div>
      
   </body>
</html>
