<?php
    require_once("../Includes/connectDB.php");
    if(isset($_POST['deletebtn'])) {
        $id=$_POST['delete_id'];
        
        $sql3="DELETE FROM contactform WHERE UserID=$id";
        $sql1="DELETE FROM  user_course Where User_ID=$id";
        $sql2="DELETE FROM user WHERE UserID=$id";
       $resul3=mysqli_query($conn,$sql3);
        $resul1=mysqli_query($conn,$sql1);
        $resul2=mysqli_query($conn,$sql2);


        if($resul3 and $resul1 and  $resul2) {
            echo "Record deleted successfully";
            header('Location:listoStudentet.php');
            
        }
        else {
            echo "Error deleting recors: " . mysqli_error($conn);
        }
    }
?>