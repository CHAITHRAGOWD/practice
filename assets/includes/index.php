<?php

session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION["loggedin"]===true){
    header("location:dashboard_landing.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        
        <style>
            .login-section-logo{
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }

            .top-spacing{
                padding-top: 10px !important;
            }

            .navbar-nav {
                flex-direction: row;
            }
        </style>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="assets\images\logo\collegelogo.jpg" height="50">
    </a>
    
    <div class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="home.html" style="padding-right:20px;">Home</a>
        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="aboutus.html"style="padding-right:20px;">
                                About us   
                            </a>
                        </li>
                        <li class="nav-item">
            <a class="nav-link" href="contact.html"style="padding-right:20px;">contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"style="padding-right:20px;">Login</a>
</li>
                         </div>
</nav>
        </header>
        <center>
        <div class="card" style="width: 450px;top:50px">
            <div class="container">
                <img src="assets/images/collegelogo.jpg" width="75px" class="login-section-logo">
                <h5>USER LOGIN FORM</h5>
                <P>Please fill in your credentials to continue</P>
                <form method="post" action="server.php">
                <input type="hidden" name="operation_type" value="login">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email" required>
                        <span id="email-err" class="text-danger"></span>
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password"  required>
                        <span id="password-err"  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-check-inline" type="checkbox" name="signedIn" value="1">Keep me Signed in
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color: #2221F7 !important;" value="Login">
                    </div>
                    <br>
                    <p>Don't have an account? <a href="register.php">Sign up now</a></p>
                    <p>Forgot Password? <a href="reset_password.php">Click to Reset</a></p>
                </form>
            </div>
        </div>
        <center>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $("#user_email").on('keyup',function(){
                if($("#user_email").val()==''){
                    $("#email-err").text('Email is Required');
                }else{
                    $("#email-err").text('');
                }
            });
        </script>

    </body>
</html>