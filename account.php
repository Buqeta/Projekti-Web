<?php
    session_start();
    include "Includes/getCoursesUser.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In Form</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Account/accountStyle.css" type="text/css">
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
                    <li id="login"><a href="account.php" id="aLog">Account</a></li>
                </ul>
            </div>
        </div>
        <div class="main" id="main-div">
            <h3 id="welcome">Welcome, <?php echo $_SESSION['Username']?></h3>
            <form id = "logoutForm" action = 'Includes/logout.php' method = "post">
                <input type = "submit" id = 'logout' name  = 'logoutBtn' value = 'Logout'></input>
            </form>

            <div id = "selectDiv">
            <form action = "Includes/enroll.php" method="POST" id="enrollForm">
                <label id = "label">Select a course: </label>
                <select name = "Courses" id = "select">
                <option value="Early Math">Early Math</option>
                <option value="Kindergarten">Kindergarten</option>
                <option value="1st-8th grade Math">1st-8th grade Math</option>
                <option value="Arithmetic">Arithmetic</option>
                <option value="Basic Geometry">Basic Geometry</option>
                <option value="Pre-algebra">Pre-algebra</option>
                <option value="Algebra basics">Algebra basics</option>
                <option value="Algebra 1">Algebra 1</option>
                <option value="High school geometry">High school geometry</option>
                <option value="Algebra 2">Algebra 2</option>
                <option value="Trigonometry">Trigonometry</option>
                <option value="Statistics and probability">Statistics and probability</option>
                <option value="High school statistics">High school statistics</option>
                <option value="Precalculus">Precalculus</option>
                <option value="Differential Calculus">Differential Calculus</option>
                <option value="Integral Calculus">Integral Calculus</option>
                <option value="Calculus 1">Calculus 1</option>
                <option value="Calculus 2">Calculus 2</option>
                <option value="Differential equations">Differential equations</option>
                <option value="Linear algebra">Linear algebra</option>
                <option value="Algebra 1">Algebra 1</option>
                <option value="Algebra 2">Algebra 2</option>
                <option value="Geometry">Geometry</option>
                <option value="High School Biology">High School Biology</option>
                <option value="College Biology">College Biology</option>
                <option value="College Chemistry">College Chemistry</option>
                <option value="Organic Chemistry">Organic Chemistry</option>
                <option value="High School Physics">High School Physics</option>
                <option value="College Physics">College Physics</option>
                <option value="Cosmology and Astronomy">Cosmology and Astronomy</option>
                <option value="Electrical engineering">Electrical engineering</option>
                <option value="Big History">Big History</option>
                <option value="World History-Origins">World History-Origins</option>
                <option value="US History">US History</option>
                <option value="US Government and Civis">US Government and Civis</option>
                <option value="Art History">Art History</option>
                <option value="StoryTelling">StoryTelling</option>
                <option value="MacroEconomics">MacroEconomics</option>
                <option value="MicroEconomics">MicroEconomics</option>
                <option value="Finance and Capital Markets">Finance and Capital Markets</option>
                <option value="Hour of Code">Hour of Code</option>
                <option value="Computer Programming">Computer Programming</option>
                <option value="Computers and the Internet">Computers and the Internet</option>
                <option value="College Computer Science Principles">College Computer Science Principles</option>
                <option value="Computer Science">Computer Science</option>
                </select>

                <input type = "submit" name = "enroll" value = "Enroll" id="button"></input>
                <input type = "submit" name = "unenroll" value = "Unenroll" id="button"></input>
                <?php
                    if(isset($_GET['error'])){
                        
                        echo '<p id = "errorMessage">';
                        if($_GET['error'] == 'alreadyEnrolled')
                            echo 'You can\'t enroll in that course, because you\'re already enrolled!';
                        else if($_GET['error'] == 'insert')
                            echo 'Something went wrong!';
                        else if($_GET['error'] == 'courseID')  
                            echo 'Something went wrong!';
                        else if($_GET['error'] == 'notEnrolled')
                            echo 'You can\'t unenroll from that course, because you\'re not enrolled!';
                        else if($_GET['error'] == 'delete')  
                            echo 'Something went wrong!';
                        else if($_GET['error'] == 'courseID2')  
                            echo 'Something went wrong!';
                        else
                            echo '';
                        
                        echo '</p>';
                    }
                ?>
            </form>
            </div> 

            <h3 id = "yourCourses">Your courses</h3>
            <div id = coursesDiv>

                <?php
                    foreach($coursesUser as $course){
                        echo '<div class = "courses">';
                        echo '<p class = "p" name = "course">'.$course.'</p>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>