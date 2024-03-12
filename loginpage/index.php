<?php 
require('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
    
    <link rel="stylesheet" href="in.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register
            </button>
        </div>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank">
            <img src="images/fbb.jpg">
            </a>
            <a href="https://instagram.com" target="_blank">
            <img src="images/insta.jpg">
            </a>
            <a href="https://linkedin.com" target="_blank">
            <img src="images/lin.png">
            </a>
           
        </div>

<!--login form-->

       <form id="login" class="input-group" method="POST" action="conn.php">
         <input type="text" class="input-field" placeholder="User Id" required name="userid">
         <input type="password" class="input-field" placeholder="Password" required name="password" id="password">
        <img src="images/close.png" id="eyeicon">
         <input type="checkbox" class="check-box" id="check"><span>Remember Password</span>
         <button type="submit" name="login" class="submit-btn">Log In</button>
       </form>

<!--registarton fomrm-->

       <form id="register" class="input-group" method="POST" action="regisdata.php">
        <input type="text" class="input-field" placeholder="User Id" required name="userid">
        
        <input type="email" class="input-field" placeholder="Email Id" required name="email"
        spellcheck="false" id="email-field" onkeyup="validateEmail()">
          <span id="email-error"></span>         
        <input type="password" class="input-field" placeholder="Password" required name="password">


        
       
        <input type="checkbox" class="check-box" id="check"><span>I agree to the terms
            and conditions</span>
            
        <button type="submit"  name="login" class="submit-btn" >Register</button>
      </form>

</div>    
    </div>

    <script src="jsfile.js"></script>

</body>
</html>