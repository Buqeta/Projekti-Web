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
                <table class="dashTab dashtabres" >
                    <tr> 
                        <td>ID</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Courses</td>
                        <td>Unenroll user</td>
                    </tr>
                    <?php
                        $userii=$_SESSION['userID'];
                        $sql="SELECT * 
                            from user
                            where Role=0";

                        $result=mysqli_query($conn,$sql);
                
                       if(mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['UserID'];?></td>
                        <td><?php echo $row['First_Name'];?></td>
                        <td><?php echo $row['Last_Name'];?></td>
                        <td><?php echo $row['Username'];?></td>
                        <td><?php echo $row['E_Mail'];?></td>
                        <td>
                            <form action='showLendet.php' method="post">
                                <input type="hidden" name="lend_Us" value="<?php echo $row['UserID']; ?>">
                                <button type="submit" class="deletebutoni" name="lendUserbtn"class="deletebtn">Show</button>
                            </form>
                        </td>
                        <td>
                            <form action='fshijStdentet.php' method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['UserID']; ?>">
                                <button type="submit" class="deletebutoni" name="deletebtn"class="deletebtn">Delete</button>
                            </form>
                        </td>


                    </tr>
                <?php } //kllapa e while
                    echo "</table>";
                } //kllapa e if
                else {
                    echo "Nuk ka usera";
                }
                mysqli_close($conn); ?>
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>
</html>