<?php
    require_once("../Includes/connectDB.php");
    
    if(isset($_POST['lendUserbtn'])) {
        $id=$_POST['lend_Us'];
        $sql="SELECT CourseID from user_course where user_ID=$id";  
         $resul=mysqli_query($conn,$sql);
        if($resul) {
           // echo "Record deleted successfully";
           // $SESSION['success']="Your data is DELETED";
            header('Location:showLendet.php');
        }
        else {
            echo "Error deleting recors: " . mysqli_error($conn);
           // $_SESSION['status']
           
        }
    }
?>