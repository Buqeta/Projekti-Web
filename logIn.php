<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In Form</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Login/logIn_Style.css" type="text/css">
        <link rel="stylesheet" href="css/responsive.css" type="text/css">
    </head>
    <body>
        <div class='navBar'>
            <div class='navFillim'>
                <ul>
                    <li><a href='index.php'>
                        <img src="llogojaPerf.png" alt ="logoja" id='logo'>
                    </a>
                    </li>
                </ul>
            </div>
            <!--Hamburgeri-->
            <a href='#' class='butoni'>
                <span class='bar'></span>
                <span class='bar'></span>
                <span class='bar'></span>

            </a>
            <div class='navFund'>
                <ul class='navList' id='ul2'>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="subPages/Courses.php">Courses</a></li>
                    <?php
                        if (isset($_SESSION["role"]) && $_SESSION['role'] == 1) {
                    ?>
                    <li><a href="subpages/dashboard.php">Dashboard</a></li>
                    <?php
                        }
                    ?>
                    <?php
                    if(isset($_SESSION["Role"]) && $_SESSION['Role'] == 0){
                        echo '<li><a href="account.php">Account</a></li>';
                        header("Location: account.php");
                    }
                    ?>
                    <li id="login"><a href="logIn.php" id="aLog">Log In</a></li>
                    <li><a href="Register.php" >Register</a></li>
                    <!--li><a href="#"><br>Login</a></li-->
                </ul>
            </div>
        </div>
        <div class="main" id="main-div">
            
            <form id="form" action = "Includes/loginVerify.php" method = "POST" onsubmit = "return validate();" >
                    <h2>Log In</h2>
                
                <div class="form-element">
                    <label>Username </label>
                    <input type="text" id="username" name="username"placeholder="johnsmith123">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Password </label>
                    <input type="password" id="password" name="password">
                    <p>Error Message</p>
                </div>
                <input type="submit" id="submit_btn" name = "LogInBtn" value = "Log In"></input>
                <?php
                    if(isset($_GET['error'])){
                    ?>
                        <p <?php echo 'style = "visibility: visible; color: white; text-align: center;"'?>>
                        <?php 
                            if($_GET['error'] == 'emptyFields')
                                echo 'Fields cannot be empty!';
                            else if($_GET['error'] == 'wrongPassword')
                                echo 'Wrong password!';
                            else if($_GET['error'] == 'noUser')  
                                echo 'This user doesn\'t exist!';
                            else if($_GET['error'] == 'sqlError')
                                echo 'Something went wrong!';
                            else
                                echo 'You have successfully logged in!';
                        ?>
                        
                        </p>
                    <?php    
                    }
                    ?> 
                <a href = "Register.php">Create an account</a>
            </form>
        </div>
        <div class="contacts" id="contacts-div">

        </div>
        <script type = "text/javascript" src="Login/logIn_JS.js"></script>
        <script type="text/javascript" src="JavaScript/responsive.js"></script>
    </body>
</html>