<?php
    session_start();
    include "../includes/navigationBar.php";
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
                    <tr><td>FormID</td>
                        <td>Subject</td>
                        <td>Text</td>
                        <td>Date</td>
                    </tr>
                    <?php
                        require_once("../includes/connectDB.php");
                            $idjia=$_POST['messages_us'];
                            $sql="SELECT u.UserID, c.Subject,c.Content, c.date 
                                    from user u inner join contactform c on u.UserID=c.UserID
                                    where u.UserID=$idjia";
                            $result=mysqli_query($conn,$sql);
                    
                        if(mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_array($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['UserID'];?></td>
                                    <td><?php echo $row['Subject'];?></td>
                                    <td><?php echo $row['Content'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                </tr>
                            <?php }
                                echo "</table>";
                            }
                            else {
                                echo "This user hasn't completed any contact forms.";
                            }
                            mysqli_close($conn);
                        ?>
                </table>
                <button type="submit" name="back" class="backbtn"><a href="dashContact.php">Back</a></button>
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>
</html>