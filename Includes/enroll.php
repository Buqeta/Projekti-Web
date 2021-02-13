<?php

session_start();

if(isset($_POST['enroll'])){
    require 'connectDB.php';
    
    $course = $_POST['Courses'];
    $user = $_SESSION['userID'];
    

    if(checkEnrolled() == true){
        header("Location: ../account.php?error=alreadyEnrolled");
        exit();
    }
    else{
        $courseID = getCourseID($conn, $course);
        if($courseID != -1){
            $sql2 = "INSERT INTO user_course (CourseID, User_ID) VALUES ('$courseID', '$user')";
            if($result2 = mysqli_query($conn, $sql2)){
                header("Location: ../account.php?success=trueEnroll");
                exit();
            }
            else{
                header("Location: ../account.php?error=insert");
                exit();
            }
        }
        else{
            header("Location: ../account.php?error=courseID");
            exit();
        }
    }
}
else if(isset($_POST['unenroll'])){
    require 'connectDB.php';
    
    $course = $_POST['Courses'];
    $user = $_SESSION['userID'];

    if(checkEnrolled() == false){
        header("Location: ../account.php?error=notEnrolled");
        exit();
    }
    else{
        $courseID = getCourseID($conn, $course);

        if($courseID != -1){
            $sql2 = "DELETE FROM user_course WHERE CourseID = '$courseID' AND User_ID = '$user'";
            if($result2 = mysqli_query($conn, $sql2)){
                
                header("Location: ../account.php?success=trueUnenroll");
                exit();
            }
            else{
                header("Location: ../account.php?error=delete");
                exit();
            }
        }
        else{
            header("Location: ../account.php?error=courseID2");
            exit();
        }
    }
    
}
else{
    header("Location: ../account.php?error=account");
    exit();
}




function checkEnrolled(){
    global $conn;
    global $user;
    global $course;

    $sql = "SELECT * 
            FROM course c INNER JOIN user_course uc 
            ON c.CourseID = uc.CourseID 
            INNER JOIN user u 
            ON u.UserID = uc.User_ID 
            WHERE uc.CourseID IN (SELECT c.CourseID 
                                  FROM course c 
                                  WHERE c.Course_Name ='$course') AND uc.User_ID ='$user';";
    if($result = mysqli_query($conn, $sql)){    //mysqli_query - ekzekuton queryn
        if(mysqli_num_rows($result) > 0){       //a kthen me shume se 0 rreshta rezultati?
            return true;
        }
    }
    return false;
}

function getCourseID($conn, $course){
    $sql1 = "SELECT c.CourseID FROM course c WHERE c.Course_Name ='$course'";
    $courseID = -1;
    if($result = mysqli_query($conn, $sql1)){
        $array = mysqli_fetch_assoc($result);   //e ruan rezultatin si array asociative
        $courseID =$array['CourseID'];              //kthen id te kursit
        return $courseID;       
    }
    return $courseID;     
}
