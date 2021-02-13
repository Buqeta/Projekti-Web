<?php



if(isset($_POST['LogInBtn'])){
    require 'connectDB.php'; //duhet patjeter te perfshihet


    $username = $_POST['username']; //marrim te dhenat nga logIn.php
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("Location: ../logIn.php?error=emptyFields");
       
        exit();
    }
    else{
        $sql = "SELECT * FROM user WHERE Username = ? OR E_Mail = ?;";//mund te logohen me email ose username
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ //kontrollon nese statement nuk funksionon per databazen tone
            header("Location: ../logIn.php?error=sqlError");
            
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result)){     //a kthen ndonje rezultat query qe e kemi krijuar?
                if($row['Password'] == $password){
                    session_start();
                    $_SESSION['userID'] = $row['UserID'];
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['FirstName'] = $row['First_Name'];
                    $_SESSION['LastName'] = $row['Last_Name'];
                    $_SESSION['E_Mail'] = $row['E_Mail'];
                    $_SESSION['Role'] = $row['Role'];
                    
                    //header("Location: ../logIn.php?success=true");
                    if ($_SESSION['Role']==1) {
                        header("Location: ../subPages/dashboard.php");
                    }
                    
                   // exit();
                }
                else{
                    header("Location: ../logIn.php?error=wrongPassword");
                    
                    exit();
                }
            }
            else{
                header("Location: ../logIn.php?error=noUser");
                
                exit();
            }
        }
    }
}
else{
    header("Location: ../logIn.php?error=notSubmit");
   exit();
}



?>

