<?php
    session_start();
?>

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
                    <li><a href="../includes/logout.php">Logout<a></li>
                    <!--li><a href="subPages/Courses.php"><br>Courses</a></li>
                    <li><a href="logIn.php"><br>Login</a></li>
                    <li><a href="Register.php"><br>Register</a></li-->
                    
                    <!--li><a href="#"><br>Login</a></li-->
                </ul>
            </div>
        </div>



        <h1 class='dashText'>Dashboard</h1>
        <!--table>
            <tr>
                <td>First Name</td>
                <td>Last Name </td>
                 <td>Username </td>
                <td>Email</td>
                <td>Modify</td>
                <td>Delete user</td>
        </tr>
        </table-->
        <?php 
            include "fshijStdentet.php";
        ?>
        <div class='dash-container'>
            <div class='dash-left'>
                <a href="dashCourses.php">Active Courses</a><br>
                <!--a href="#">Kliko ketu per te shtuar kurse te reja</a><br-->
                <a href="listoStudentet.php">Edit Students</a>

            </div>
            <div class ='dash-right'>
                <table class="dashTab">
                    <tr> 
                        <!--td colspan=4><?php //echo $_SESSION['Username']?></td-->
                    </tr>
                    <tr><td>Course ID</td>
                        <td>Course Name</td>
                        <td>Unenroll this user</td>
                    </tr>
                    
                    <?php
                        require_once("../includes/connectDB.php");
                        $idja=$_POST['lend_Us'];
                            /*
                            $sql1="SELECT uc.CourseID, c.Course_Name from user_course uc inner join user u  on u.UserID=uc.User_ID 
                                    inner join course c on uc.User_Course_ID=c.CourseID
                                    where u.UserID=$idja";*/
                            $sql="SELECT c.Course_Name, c.CourseID
                            FROM user u INNER JOIN user_course uc 
                            ON u.UserID = uc.User_ID 
                            INNER JOIN course c 
                            ON c.CourseID = uc.CourseID
                            WHERE u.UserID = $idja";
                            //$sql="SELECT * from user u where u.Role=1";
                            $result=mysqli_query($conn,$sql);
                    
                        if(mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_array($result)) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['CourseID'];?></td>
                                        <td><?php echo $row['Course_Name'];?></td>
                                        <!--td><?php// echo $row['UserID'];?></td-->
                                        <!--td><input type="text" name="useridj" value="<?php //echo $row['UserID']; ?>"></td-->
                                        
                                        <td>
                                            <form action='unenrollStud.php' method="post">
                                                <input type="hidden" name="unenroll_id" value="<?php echo $row['CourseID']; ?>">
                                                <button type="submit" class="deletebutoni" name="unenrollbtn"class="deletebtn">Unenroll</button>
                                            </form>
                                        </td>


                                    </tr>

                                    <?php
                                    //echo "<tr><td>". $row['UserID']. "</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Username"]."</td><td>".$row['E_Mail']."</td><td><input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input></td><tr>";
                                    //<input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input>
                                //   echo "<input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input>";
                                    ?>
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