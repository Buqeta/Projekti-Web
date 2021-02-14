<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Courses</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/navigationBar.css">
        <link rel="stylesheet" href="css/mainHeader.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/courses.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>

    <body>
        <!--navBar-->
        <div class='navBar'>
            <div class='navFillim'>
                <ul>
                    <li><a href='#'>
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
                    <li><a href="../index.php">Home</a></li>
                    <li id='coursesNav'><a href="Courses.php">Courses</a></li>
                    <?php
                        if (isset($_SESSION['Role']) && $_SESSION['Role'] == 1) {
                            echo "<li><a href='subPages/dashboard.php'>Dashboard</a></li>";
                            echo "<li><a href='../includes/LogOut.php'>Logout<a></li>";
                        }
                   
                        else if (isset($_SESSION['Role']) && $_SESSION['Role'] == 0) {
                            echo "<li><a href='../account.php'>Account</a></li>";
                            echo "<li><a href='../contact.php'>Contact Us<a></li>";
                        }
                        else {
                            echo "<li><a href='../logIn.php'>Login<a></li>";
                            echo "<li><a href='../Register.php'>Register</a></li>";
                             
                        }
                    
                    ?>
                    
                </ul>
            </div>
        </div>


            <!--Body-->
            
        <div class='courses dashCours'>
            <div class='math items'>
                <div class='course_icon'>
                    <img src="../Photos/icons/math.png" class="course_icon">
                    <h1>   Math</h1>
                </div>
                
                
                <p></p>
                <div class='inner-courses'>                
                    <a href="#" id=>Early Math</a>
                    <a href="#">Kindergarten</a>
                    <a href="#">1st - 8th grade</a>
                    <a href="#">Arithmetic</a> 
                    <a href="#">Basic geometry</a> 
                    <a href="#">Pre-algebra</a> 
                    <a href="#">Algebra basics</a> 
                    <a href="#">Algebra 1</a> 
                    <a href="#">High school geometry</a> 
                    <a href="#">Algebra 2</a>
                    <a href="#">Trigonometry</a> 
                    <a href="#">Statistics and probability</a>
                    <a href="#">High school statistics</a> 
                    <a href="#">Precalculus</a>
                    <a href="#">Differential Calculus</a>
                    <a href="#">Integral Calculus</a>
                    <a href="#">Calculus 1</a>
                    <a href="#">Calculus 2</a>
                    <a href="#">Differential equations</a>
                    <a href="#">Linear Algebra</a>
                    <a href="#">Algebra 1</a>
                    <a href="#">Algebra </a>
                    <a href="#">Geometry</a> 
                </div>
            </div>
            <div class='science items'>
                <div class='course_icon'>
                    <img src="../Photos/icons/science.png" class="course_icon">
                    <h1> Science</h1>
                </div>
                <p></p>
                <div>
                    <a href="#">High School Biology</a>
                    <a href="#">College Biology</a>
                    <a href="#">College Chemistry</a>
                    <a href="#">Organic chemistry</a>
                    <a href="#">High school physics</a>
                    <a href="#">College Physics </a>
                    <a href="#">Cosmology and astronomy</a>
                    <a href="#">Electrical engineering</a>
                </div>
            </div>
            <div class='arts items'>
                <div class='course_icon'>
                    <img src="../Photos/icons/arts.png" class="course_icon">
                    <h1>Humanities</h1>
                </div>
                <p></p>
                <div class>
                    <a href="#">Big History</a>
                    <a href="#">World History-Origins</a>
                    <a href="#">US History</a>
                    <a href="#">US Government and civis</a>
                    <a href="#">US Government and Politics</a>
                    <a href="#">Art history</a>
                    <a href="#">StoryTelling</a>
                    <a href="#">World History</a>
                </div>
            </div>
            <div class='economics items'>
                <div class='course_icon'>
                    <img src="../Photos/icons/economics.png" class="course_icon">
                    <h1>   Economics</h1>
                </div>
                <p></p>
                <div class>
                    <a href="#">Macroeconomics</a>
                    <a href="#">Microeconomics</a>
                    <a href="#">Finance and capital markets</a>
                </div>
            </div>
            <div class='computing items'>
                <div class='course_icon'>
                    <img src="../Photos/icons/computer.png" class="course_icon">
                    <h1>   Computing</h1>
                </div>
                <p></p>
                <div>
                    <a href="#">Hour of Code</a>
                    <a href="#">Computer programming</a>
                    <a href="#">Computers and the Internet</a>
                    <a href="#">College Computer Science Principles</a>
                    <a href="#">Computer science</a>
                </div>

            </div>

            

        </div>

        <script type="text/javascript" src="../JavaScript/responsive.js"></script>

    </body>
</html>



