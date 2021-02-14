<?php
    session_start();
    include "../Includes/getCoursesUser.php";
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Dashboard</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/navigationBar.css">
        <link rel="stylesheet" href="../css/mainHeader.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">

        

    </head>
    <body>

        <!--navBar-->
        <div class='navBar'>
            <div class='navFillim'>
                <ul>
                    <li><a href='../index.php'>
                        <img src="../Photos/Logoja/llogojaPerf.png" alt ="logoja" id='logo'>
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
                    <li><a href="../index.php"><br>Home</a></li>
                    <li id='dashboard'><a href="dashboard.php"><br>Dashboard</a></li>
                    <li><a href="../includes/LogOut.php"><br>Logout<a></li>
                </ul>
            </div>
        </div>


    <?php
        if (isset($_SESSION["Role"]) && $_SESSION['Role'] == '1') {
    ?>
        <h1 class='dashText'>Dashboard</h1>
        <!--h3 id="welcome">Welcome, <?php// echo $_SESSION['Username']?></h3-->
    <?php    //foreach($coursesUser as $course) {?>
        <div class='dash-container'>
            <div class='dash-left'>
                    <a href="dashboard.php">My Profile</a><br>
                    <a href="dashCourses.php">Active Courses</a><br>
                    <!--a href="#">Kliko ketu per te shtuar kurse te reja</a><br-->
                    <a href="listoStudentet.php">Edit Students</a>
                    <a href="dashContact.php">Contacts</a>
            </div>
            <div class ='dash-right dashDashright'>
                    <a href="#"><?php echo "ID: ". $_SESSION["userID"]?></a><br>
                    <a href="#"><?php echo "Emri: ". $_SESSION["FirstName"]?></a><br>
                    <a href="#"><?php echo "Username: ". $_SESSION["Username"]?></a><br>
                    <a href="#"><?php echo "E-Mail: ". $_SESSION["E_Mail"]?></a><br>
                
            </div>
            </div>
        </div>

       <?php    // }?>
    <?php 
        }else {
          echo  "<h3>".$_SESSION['Username'] ." nuk keni te drejte qasjeje ne dashboard</h3>";
        }
    
    ?>
    <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>

</html>