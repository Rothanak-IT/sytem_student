<?php
session_start();
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if($_GET['id']){
    $user_id=$_GET['id'];
    $sql="DELETE FROM tb_skill WHERE id='$user_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['message']='<center><p style="color: green;" >Delete Student is Successfully</p></center>';
        header("location: skill.php");
    } 
}
?>