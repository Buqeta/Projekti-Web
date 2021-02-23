<?php
    session_start();
 
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
                    <li><a href="../index.php">Home</a></li>
                   
                    <li id='dashboard'><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="../Includes/logout.php">Logout<a></li>
                </ul>
            </div>
        </div>



        <h1 class='dashText'>Dashboard</h1>
        <?php 
            include "fshijStdentet.php";
        ?>
        <div class='dash-container'>
            <div class='dash-left'>
                <a href="dashboard.php">My Profile</a><br>
                <a href="#">Active Courses</a><br>
                <a href="listoStudentet.php">Edit Students</a>
                <a href="dashContact.php">Contacts</a>
            </div>
            <div class ='dash-right'>
                <table class="dashTab">
                    <tr><td>Course ID</td>
                        <td>Course Name</td>
                        <td>Number of users</td>
                    </tr>
                    
                    <?php
                     
                        require_once("../includes/connectDB.php");
                        
                            $sql="SELECT c.Course_Name, c.CourseID , COUNT(uc.User_ID)as CountUser
                                From user_course uc inner join course c 
                                where uc.CourseID=c.CourseID
                                group by c.Course_Name, c.CourseID";
                                
                            $result=mysqli_query($conn,$sql);
                    
                        if(mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_array($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['CourseID'];?></td>
                                        <td><?php echo $row['Course_Name'];?></td>
                                        <td><?php echo $row['CountUser'];?></td>
                                    </tr>
                            <?php }
                                echo "</table>";
                            }
                            else {
                                echo "There are not any enrolled courses!";
                            }
                            mysqli_close($conn);                      
                        ?>
                </table>
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>
</html>