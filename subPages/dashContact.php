<?php
    session_start();
    include "../Includes/getCoursesUser.php";
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
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
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
                    <li id='dashboard'><a href="dashboard.php"><br>Dashboard</a></li>
                    <li><a href="../includes/LogOut.php"><br>Logout<a></li>
                </ul>
            </div>
        </div>


    <?php
        if (isset($_SESSION["Role"]) && $_SESSION['Role'] == '1') {
    ?>
        <h1 class='dashText'>Dashboard</h1>
        <!--h3 id="welcome">Welcome, <?php// echo $_SESSION['Username']?></h3-->
    <?php    //foreach($coursesUser as $course) {?>
        <div class='dash-container'>
            <div class='dash-left'>
            <a href="dashboard.php">My Profile</a><br>
                    <a href="dashCourses.php">Active Courses</a><br>
                    <!--a href="#">Kliko ketu per te shtuar kurse te reja</a><br-->
                    <a href="listoStudentet.php">Edit Students</a>
                    <a href="#">Contact</a>
            </div>
            <div class ='dash-right'>
            <table class="dashTab dashtabres" >
                    <tr> 
                        <td>ID</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Show messages</td>
                    </tr>
                    <?php
                        //require_once("../includes/connectDB.php");
                        $userii=$_SESSION['userID'];
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
                                        <form action='showMessages.php' method="post">
                                            <input type="hidden" name="messages_us" value="<?php echo $row['UserID']; ?>">
                                            <button type="submit" class="deletebutoni" name="messagebtn"class="deletebtn">Show messages</button>
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

       <?php    // }?>
    <?php 
        }else {
          echo  "<h3>".$_SESSION['Username'] ." nuk keni te drejte qasjeje ne dashboard</h3>";
        }
    
    ?>
    <script type="text/javascript" src="../JavaScript/responsive.js"></script>
    </body>

</html>