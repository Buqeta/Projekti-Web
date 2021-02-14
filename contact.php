<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Login/login_Style.css" type="text/css">
        <link rel="stylesheet" href="Contact/contact_Style.css" type="text/css">
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
            <div class='navFund'>
                <ul class='navList' id='ul2'>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="subPages/Courses.php">Courses</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li id="login"><a href="contact.php" id="aLog">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="main" id="main-div">
            
            <form id="form" action = "Includes/contactVerify.php" method = "POST" onsubmit = "return validate();" >
                    <h2>Contact Us</h2>
                
                <div class="form-element">
                    <label>Subject </label>
                    <input type="text" id="username" name="subject">
                    <p>Error Message</p>
                </div>
                <div class="form-element">
                    <label>Content </label>
                    <textarea rows = "5" cols = "20" id="textarea" name="content" ></textarea>
                    <p>Error Message</p>
                </div>
                <input type="submit" id="submit_btn" name = "SendBtn" value = "Send"></input>
                <?php
                    if(isset($_GET['error'])){
                    
                        echo '<p style = "visibility: visible; color: white; text-align: center;">';
                            if($_GET['error'] == 'true')
                                echo 'Something went wrong!</p>';
                    }
                    if(isset($_GET['success']) && $_GET['success'] == 'true'){
                        echo '<p style = "visibility: visible; color: white; text-align: center;">Thank you for you feedback! We\'ll get back to you soon!</p>';
                    }

                ?> 
            </form>
        </div>
        <script type = "text/javascript" src="Contact/contact_JS.js"></script>
    </body>
</html>