<!DOCTYPE html>
<html>

    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../css/navigationBar.css">
        <link rel="stylesheet" href="../css/mainHeader.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        

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
                    <li id='dashboard'><a href="dashboard.php"><br>Dashboard</a></li>
                    <li><a href="../includes/LogOut.php"><br>Logout<a></li>
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
        <div class='dash-container'>
            <div class='dash-left'>
                <a href="#">Kurset e pergjithshme</a><br>
                <!--a href="#">Kliko ketu per te shtuar kurse te reja</a><br-->
                <a href="listoStudentet.php">Kliko ketu per te menaxhuar studentet</a>

            </div>
            <div class ='dash-right'>
                <div>
                    <!--h4>Tabela</h4>
                    <table>
                        <tr> 
                            <td>Course ID</td>
                            <td>Course Name</td>
                        </tr>

                    </table-->
                </div>
                <div>
                <!--table id='userat'>
                    <tr> 
                        <td>Student Name</td>
                        <td>Surname</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Course</td>
                        <td>Fshij</td>

                    </tr>

                </table-->

                </div>
            </div>
        </div>
    </body>




    
</html>