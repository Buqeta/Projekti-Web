<?php
    session_start();
    include "../Includes/navigationBar.php";
    include "fshijStdentet.php";
    require_once("../Includes/connectDB.php");
?>
<!DOCTYPE html>
<html>
    <body>
        <h1 class='dashText'>Dashboard</h1>
        <div class='dash-container'>
            <?php include "../Includes/dashLeft.php";?>
            <div class ='dash-right'>
                <table class="dashTab">
                    <tr><td>Course ID</td>
                        <td>Course Name</td>
                        <td>Number of users</td>
                    </tr>
                    <?php
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