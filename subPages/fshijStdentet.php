<?php
    require_once("../Includes/connectDB.php");
    //$id=$_GET['userID'];//$id=$_GET['userID'];
    if(isset($_POST['deletebtn'])) {
        $id=$_POST['delete_id'];
    
        $sql1="DELETE FROM  user_course Where User_ID=$id";
        $sql2="DELETE FROM user WHERE UserID=$id";
        $sql3="DELETE FROM contactform WHERE UserID=$id";
     //   $sql="DELETE FROM user WHERE UserID=$id";
       // $sql="DELETE FROM  user_course Where UserID=$id";
        $resul1=mysqli_query($conn,$sql1);
        $resul2=mysqli_query($conn,$sql2);
        $resul3=mysqli_query($conn,$sql3);


        if($resul1 and $resul2 and  $resul3) {
            echo "Record deleted successfully";
           // $SESSION['success']="Your data is DELETED";
            header('Location:listoStudentet.php');
            
        }
        else {
            echo "Error deleting recors: " . mysqli_error($conn);
           // $_SESSION['status']
           
        }
    }
?>