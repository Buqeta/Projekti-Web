<?php
require_once("../Includes/connectDB.php");
    //$id=$_GET['userID'];//$id=$_GET['userID'];
    if(isset($_POST['unenrollbtn'])) {
        $id=$_POST['unenroll_id'];
        $sql="DELETE FROM user_course Where CourseID=$id";
        $resul=mysqli_query($conn,$sql);


        if($resul) {
            echo "Record deleted successfully";
           // $SESSION['success']="Your data is DELETED";
            header('Location:listoStudentet.php');
            
        }
        else {
            echo "Error deleting recors: " . mysqli_error($conn);
           // $_SESSION['status']
           echo "Gabimi";
           
        }
    }
?>