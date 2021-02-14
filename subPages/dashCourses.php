<!DOCTYPE html>
<html>

    <head>
        <title>Dashboard</title>
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
                    <li><a href="../index.php"><br>Home</a></li>
                    <li id='dashboard'><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="../LogOut.php">Logout<a></li>
                </ul>
            </div>
        </div>



        <h1 class='dashText'>Dashboard</h1>
        <?php 
            include "fshijStdentet.php";
        ?>
        <div class='dash-container'>
            <div class='dash-left'>
                <a href="#">Active Courses</a><br>
                <!--a href="#">Kliko ketu per te shtuar kurse te reja</a><br-->
                <a href="listoStudentet.php">Edit Students</a>
            </div>
            <div class ='dash-right'>
            <table class="dashTab">
                    <tr> 
                        <!--td colspan=4><?php// echo $_SESSION['Username']?></td-->
                    </tr>
                    <tr><td>Course ID</td>
                        <td>Course Name</td>
                        <td>Number of users</td>
                    </tr>
                    
                    <?php
                        require_once("../includes/connectDB.php");
                            $sql= "SELECT c.CourseID, c.Course_Name, COUNT(uc.User_ID)as CountUser from course c, user_course uc where c.CourseID=uc.CourseID GROUP BY c.CourseID, c.Course_Name";
                            
                            $result=mysqli_query($conn,$sql);
                    
                        if(mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_array($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['CourseID'];?></td>
                                        <td><?php echo $row['Course_Name'];?></td>
                                        <td><?php echo $row['CountUser'];?></td>
                                        <!--td><?php// echo $row['UserID'];?></td-->
                                        
                                    </tr>
                            <?php }
                                echo "</table>";
                            }
                            else {
                                echo "Nuk ka lende te shtuara";
                            }
                            mysqli_close($conn); 
                        
                        ?>
                </table>
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>
</html>