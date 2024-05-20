
<?php
session_start();
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if($_GET['student_id']){
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id='$user_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['message']='<p style="color: green;" >Delete Student is Successfully</p>';
        header("location: addstudent.php");
    } 
}
?>