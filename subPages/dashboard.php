<?php
    session_start();
    include "../Includes/getCoursesUser.php";
    include "../Includes/navigationBar.php";
?>
<!DOCTYPE html>
<html>
    <body>
    <?php
        if (isset($_SESSION["Role"]) && $_SESSION['Role'] == '1') {
    ?>
        <h1 class='dashText'>Dashboard</h1>       
        <div class='dash-container'>
            <?php include "../Includes/dashLeft.php";?>
            <div class ='dash-right dashDashright'>
                    <a href="#"><?php echo "ID: ". $_SESSION["userID"]?></a><br>
                    <a href="#"><?php echo "Emri: ". $_SESSION["FirstName"]?></a><br>
                    <a href="#"><?php echo "Username: ". $_SESSION["Username"]?></a><br>
                    <a href="#"><?php echo "E-Mail: ". $_SESSION["E_Mail"]?></a><br>
            </div>
        </div>

    <?php 
        }else {
            header("Location:../logIn.php");

            exit();
        }
    ?>
    <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>

</html>