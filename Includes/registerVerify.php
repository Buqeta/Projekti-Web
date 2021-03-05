<?php

if(isset($_POST['RegisterBtn'])){

    require 'connectDB.php';

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd2 = $_POST['password2'];
    $emailCheck = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    $passwordCheck = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

    if(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($pwd) || empty($pwd2)){
        header("Location: ../Register.php?error=emptyFields");
        exit();
    }
    else if(preg_match($emailCheck, $email) == 0){
        header("Location: ../Register.php?error=invalidEmail");
        exit();
        
    }
    else if(preg_match($passwordCheck, $pwd) == 0){  
        header("Location: ../Register.php?error=invalidPassword");
        exit();
    }
    else if($pwd2 != $pwd){      
        header("Location: ../Register.php?error=passwordsDontMatch");
        exit();
    }
    else if (checkUsername() == false){
        header("Location: ../Register.php?error=usernameTaken");
        exit();
    }
    else if(checkEmail() == false){
        header("Location: ../Register.php?error=emailTaken");
        exit();
    }
    else{
        $sql = "INSERT INTO user (First_Name, Last_Name, Username, E_Mail, Password, Role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../Register.php?error=sqlerror2");
            exit();
        }
        else{
            $num = 0;
            mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $username, $email, $pwd, $num);
            mysqli_stmt_execute($stmt);
            header("Location: ../Register.php?success=true");
            exit();
        }
    }
}
else{
    header("Location: ../Register.php?error");
    exit();
}


function checkUsername(){
    global $conn;
    global $username;
    $sql1 = "SELECT Username FROM user WHERE Username =?";
    $stmt1 = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt1, $sql1)){
        return false;
    }
    else{
        mysqli_stmt_bind_param($stmt1, "s", $username);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_store_result($stmt1);   
        $resultCheck = mysqli_stmt_num_rows($stmt1);
        if($resultCheck > 0){
            return false;
        }
    }
    return true;
}

function checkEmail(){
    global $conn;
    global $email;
    $sql1 = "SELECT E_Mail FROM user WHERE E_Mail =?";
    $stmt1 = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt1, $sql1)){
        return false;
    }
    else{
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_store_result($stmt1);   
        $resultCheck = mysqli_stmt_num_rows($stmt1);
        if($resultCheck > 0){
            return false;
        }
    }
    return true;
}
