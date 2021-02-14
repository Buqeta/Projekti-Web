<?php

session_start();

if(isset($_POST['SendBtn'])){
    require "connectDB.php";

    $user =  $_SESSION['userID'];

    $subject = $_POST['subject'];
    $content = $_POST['content'];
    

    $sql = "INSERT INTO contactform (Subject, Content, UserID, Date) VALUES ('$subject', '$content', '$user', NOW())"; //NOW() - jep daten dhe kohen e tashme


    if($result = mysqli_query($conn, $sql)){
        header("Location: ../contact.php?success=true");
        exit();
    }
    else{
        header("Location: ../contact.php?error=true");
        exit();
    }
}


