<?php
    session_start();
    include "../Includes/navigationBar.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <h1 class='dashText'>Dashboard</h1>
        <?php 
            include "fshijStdentet.php";
        ?>
        <div class='dash-container'>
            <?php include "../Includes/dashLeft.php";?>
            <div class ='dash-right'>
                <table class="dashTab">
                    <tr><td>Course ID</td>
                        <td>Course Name</td>
                        <td>Enrollment date</td>
                        <td>Unenroll this user</td>
                    </tr>
                    <?php
                        require_once("../includes/connectDB.php");
                        $idja=$_POST['lend_Us'];
                            $sql="SELECT c.Course_Name, c.CourseID, uc.Date
                            FROM user u INNER JOIN user_course uc 
                            ON u.UserID = uc.User_ID 
                            INNER JOIN course c 
                            ON c.CourseID = uc.CourseID
                            WHERE u.UserID = $idja";
                            $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_array($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['CourseID'];?></td>
                                        <td><?php echo $row['Course_Name'];?></td>
                                        <td><?php echo $row['Date'];?></td>                
                                        <td>
                                            <form action='unenrollStud.php' method="post">
                                                <input type="hidden" name="unenroll_id" value="<?php echo $row['CourseID']; ?>">
                                                <button type="submit" class="deletebutoni" name="unenrollbtn"class="deletebtn">Unenroll</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php }
                                echo "</table>";
                            }
                            else {
                                echo "This user has no courses!";
                            }
                            mysqli_close($conn); 
                        ?>
                </table>
                    <button type="submit" name="back" class="backbtn"><a href="listoStudentet.php">Back</a></button>          
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>
</html>