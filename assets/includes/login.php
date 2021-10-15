<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Register Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style>
      
        .card{
            width:auto;
          height:auto;
          background: rgba(0, 0, 0, 0.5);
         color: #fff;
         top: 50%;
        box-sizing: border-box;
        padding: 70px 30px;
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
        <img src="images/collegelogo.jpg"" height="50">
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
<hr>
        </header>
        <main>
   <section>
        <center>
        <div class="card" style="width: 450px;top:50px">
            <div class="container">
            <img src="assets/im"  width="70px" height="50px" class="avatar">
        <h1>Sign Up</h1>
                <img src="assets/images/avatar.jpg" width="75px" class="login-section-logo">
                <h5>USER REGISTRATION FORM</h5>
                <P>Please fill in your credentials to continue</P>
                <form method="post" action="server.php">
                    <input type="hidden" name="operation_type" value="register">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="name" id="user_name" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="phone_no" id="user_phone_no" placeholder="Enter Your Phone No.">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password_confirm" id="user_password_confirmation" placeholder="Confirm Your Password">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color: #2221F7 !important;" value="login">
                    </div>
                    <br>
                    <p>Already have an account? <a href="index.php">Login instead</a></p>
                    
                </form>
    
            </div>
        </div>
        </form>
        <center>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        </section>
        </main>
    </body>
</html>
