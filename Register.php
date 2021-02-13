<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Register/Register_Style.css" type="text/css">
    </head>
    <body>
        <div class='navBar'>
            <div class='navFillim'>
                <ul>
                    <li><a href='index.html'>
                        <img src="llogojaPerf.png" alt ="logoja" id='logo'>
                    </a>
                    </li>
                </ul>
            </div>
            <div class='navFund'>
                <ul class='navList' id='ul2'>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="subPages/Courses.php">Courses</a></li>
                    <li><a href="logIn.php">Log In</a></li>
                    <li id="register"><a href="#" id="aReg">Register</a></li>
                    <!--li><a href="#"><br>Login</a></li-->
                </ul>
            </div>
        </div>
        <div class="main" id="main-div">
            
            <form id="form" action = "Includes/registerVerify.php" method = "post" onsubmit = "return validate();">
                    <h2>Register</h2>
               
                <div class="form-element">
                    <label>First Name </label>
                    <input type="text" id="first-name" name="first_name" placeholder="John">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Last Name </label>
                    <input type="text" id="last-name" name="last_name"placeholder="Smith">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Username </label>
                    <input type="text" id="username" name="username"placeholder="johnsmith123">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>E-Mail </label>
                    <input type="text" id="email" name="email"placeholder="example@example.com">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Password </label>
                    <input type="password" id="password" name="password">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Confirm Password </label>
                    <input type="password" id="password2" name="password2">
                    <p>Error Message</p>
                </div>
                <input type="submit" id="submit_btn" value="Register" name = "RegisterBtn"></input>
                <?php
                    if(isset($_GET['error'])){
                
                        echo '<p style = "visibility: visible; color: white; text-align: center;">';
                        if($_GET['error'] == 'emptyFields')
                            echo 'Fields cannot be empty!</p>';
                        else if($_GET['error'] == 'invalidEmail')
                            echo 'Invalid email!</p>';
                        else if($_GET['error'] == 'invalidPassword')  
                            echo 'Invalid password!</p>';
                        else if($_GET['error'] == 'passwordsDontMatch')
                            echo 'Passwords must match!</p>';
                        else if($_GET['error'] == 'usernameTaken')
                            echo 'Username is already taken!</p>';
                        else if($_GET['error'] == 'emailTaken')
                            echo 'Email already exists!</p>';
                        else if($_GET['error'] == 'sqlerror2')
                            echo 'Something went wrong!</p>';
                        else
                            echo '';
                    }
                    if(isset($_GET['success'])){
                        if($_GET['success'] == 'true')
                            echo '<p style = "visibility: visible; color: white; text-align: center;">You have successfully registered!</p>';
                    }
                ?>
            </form>
        </div>
        <div class="contacts" id="contacts-div">

        </div>
          <script type="text/javascript" src="Register/Register_JS.js"></script> 
    </body>
</html>