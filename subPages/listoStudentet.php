<!DOCTYPE html>
<html>

    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../css/navigationBar.css">
        <link rel="stylesheet" href="../css/mainHeader.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        

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
            <div class='navFund'>
                <ul class='navList' id='ul2'>
                    <li><a href="../index.php"><br>Home</a></li>
                    <li id='dashboard'><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="LogOut.php">Logout<a></li>
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
                <a href="#">Kurset e pergjithshme</a><br>
                <a href="#">Kliko ketu per te shtuar kurse te reja</a><br>
                <a href="#">Kliko ketu per te menaxhuar studentet</a>

            </div>
            <div class ='dash-right'>
                <table id="dashTab">
                    <tr> 
                        <td>ID</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Username</td>
                        <td>Email</td>
                        <!--td>Course</td-->
                        <td>Delete User</td>
                    </tr>
                    <?php
                        require_once("../includes/connectDB.php");
                     
                        $sql="SELECT * from user where Role=0";
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
                                        <form action='fshijStdentet.php' method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['UserID']; ?>">
                                            <button type="submit"class="deletebutoni" name="deletebtn"class="deletebtn">DELETE</button>
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
    </body>




    
</html>