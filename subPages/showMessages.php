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
                    <li><a href="../includes/logout.php">Logout<a></li>
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
                <a href="dashCourses.php">Active Courses</a><br>
                <a href="listoStudentet.php">Edit Students</a>
                <a href="dashContact.php">Contacts</a>
            </div>
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
                                echo "Nuk ka shkruar asnje mesazh".$idjia;
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