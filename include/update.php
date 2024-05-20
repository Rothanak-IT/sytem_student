<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$id=$_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$info=$result->fetch_assoc();
if (isset($_POST["update"])) {
     $username = $_POST["username"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $pass = $_POST["pass"];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $dat = $_POST['dat'];
     $birth = $_POST['birth'];
     $addres = $_POST['addres'];
     $skill = $_POST['skill'];
     $grade = $_POST['grade'];
    $shift = $_POST['shift'];
     $usertype = "student";
    $query = "UPDATE user SET username='$username',email='$email',phone='$phone',pass='$pass' gender='$gender',age='$age',dat='$dat',birth='$birth',addres='$addres',skill='$skill',grade='$grade',shift='$shift' WHERE id='$id'";
    $result2 = mysqli_query($conn,$query);
    if($result2){
        header("locatio: update.php");
        exit();
    }else{
     
    }
}
?>
<?php
error_reporting(0);
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     header("Location: index.php");
     exit();
}

?>
     <!DOCTYPE html>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <html>
     <body>

          <header class="header">
               <a href="">Update Student</a>
          </header>
         
          <div>
               <div class="content">
                <h3>Update Student</h3>
                  <div class="dev_deg" >
                    <form action="#" method="POST" >
                       <div>
                       <label>Username</label>
                        <input type="text" name="username" value="<?php echo"{$info['username']}";?>" >
                       </div>
                       <div>
                       <label>Email</label>
                        <input type="text" name="email" value="<?php echo"{$info['email']}"?>">
                       </div>
                       <div>
                       <label>Phone</label>
                        <input type="text" name="phone" value="<?php echo"{$info['phone']}"?>">
                       </div>
                       <div>
                       <label>Password</label>
                        <input type="number" name="pass" value="<?php echo"{$info['pass']}"?>">
                       </div>
                       <div>
                       <label>Gender</label>
                        <input type="text" name="gender" value="<?php echo"{$info['gender']}"?>">
                       </div>
                       <div>
                       <label>Age</label>
                        <input type="number" name="age" value="<?php echo"{$info['age']}"?>">
                       </div>
                       <div>
                       <label>Date of Bird</label>
                        <input type="date" name="dat" value="<?php echo"{$info['dat']}"?>">
                       </div>
                       <div>
                       <label>Place of birth</label>
                        <input type="text" name="birth" value="<?php echo"{$info['birth']}"?>">
                       </div>
                       <div>
                       <label>Address</label>
                        <input type="text" name="addres" value="<?php echo"{$info['addres']}"?>">
                       </div>
                       <div>
                       <label>Skill</label>
                        <input type="text" name="skill" value="<?php echo"{$info['skill']}"?>">
                       </div>
                       <div>
                       <label>Grade</label>
                        <input type="text" name="grade" value="<?php echo"{$info['grade']}"?>">
                       </div>
                       <div>
                       <label>Shift</label>
                        <input type="text" name="shift" value="<?php echo"{$info['shift']}"?>">
                       </div>
                        <button class="btn btn-success" type="text" name="update">Update</button>
                       </div>
                    </form>
                  </div>
               </div>
          </div>
          <h1>
               <?php echo $_SESSION['name']; ?>
          </h1>
     </body>

     </html>
    