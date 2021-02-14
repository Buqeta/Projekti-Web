<?php
require 'connectDB.php';


$userID = $_SESSION['userID'];

$sql = "SELECT c.Course_Name
        FROM user u INNER JOIN user_course uc 
        ON u.UserID = uc.User_ID 
        INNER JOIN course c 
        ON c.CourseID = uc.CourseID
        WHERE u.UserID = '$userID'";
$result = mysqli_query($conn, $sql);
$data = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}

$coursesUser = array_column($data, 'Course_Name'); //array_column - kthen vlerat nga nje kolone e vetme e input array-t






