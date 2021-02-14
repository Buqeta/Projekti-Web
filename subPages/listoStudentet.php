<?php?>

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
                <a href="#">Edit Students</a>

            </div>
            <div class ='dash-right'>
                <table class="dashTab dashtabres" >
                    <tr> 
                        <td>ID</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Courses</td>
                        
                        <!--td>User_Course_ID</td-->

                        <!--td>Course</td-->
                        <td>Unenroll user</td>
                    </tr>
                    <?php
                        require_once("../includes/connectDB.php");
                     
                        $sql="SELECT * 
                            from user 
                            where Role=0";
                        //$sql="SELECT * from user u where u.Role=1";
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
                                    <!--td><?php //echo $row['Course_Name'];?></td-->
                                    <!--td><?php //echo $row['User_Course_ID'];?></td-->
                                    <td>
                                        <form action='showLendet.php' method="post">
                                            <input type="hidden" name="lend_Us" value="<?php echo $row['UserID']; ?>"-->
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

                                 <?php
                                //echo "<tr><td>". $row['UserID']. "</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Username"]."</td><td>".$row['E_Mail']."</td><td><input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input></td><tr>";
                                //<input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input>
                             //   echo "<input type='submit' id='submit_btn' name ='deletebtn' value = 'Delete'></input>";
                                ?>
                           <?php }
                            echo "</table>";
                         }
                         else {
                             echo "Nuk ka usera";
                         }
                         mysqli_close($conn); ?>

                

                

                </div>
            </div>
        </div>
        <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>




    
</html>