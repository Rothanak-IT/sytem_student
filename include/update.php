<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$info = $result->fetch_assoc();
if (isset($_POST['update'])) {
     $s_id = $_POST['s_id'];
     $username = $_POST["username"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $dat = $_POST['dat'];
     $birth = $_POST['birth'];
     $addres = $_POST['addres'];
     $skill = $_POST['skill'];
     $grade = $_POST['grade'];
     $shift = $_POST['shift'];
     $usertype = "student";
     $query = "UPDATE user SET username='$username',email='$email',phone='$phone', gender='$gender',age='$age',dat='$dat',birth='$birth',addres='$addres',skill='$skill',grade='$grade',shift='$shift',S_id='$s_id' WHERE id='$id'";
     $result2 = mysqli_query($conn, $query);
     if ($result2) {
          header("location: update.php");
          exit();
     } else {

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
          <div class="container-fluid">

               <?php include "logout.php" ?>

               <div class="row p-0 m-3">
                    <div class="col-sm-3">
                         <div id="accordion">

                              <div class="card">
                                   <div class="card-header">
                                        <center>
                                             <a class="btn text-primary" data-bs-toggle="collapse" href="#collapseOne">
                                                  Student Management
                                             </a>
                                        </center>
                                   </div>
                                   <?php include "list_conten.php" ?>
                              </div>

                              <div class="card">
                                   <div class="card-header">
                                        <center>
                                             <a class="btn text-info" data-bs-toggle="collapse" href="#collapseTwo">
                                                  Scoring Mangement
                                             </a>
                                        </center>
                                   </div>
                                   <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item btn btn-primary text-primary">Score
                                                       Students</li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-header">
                                        <center>
                                             <a class="btn text-success" data-bs-toggle="collapse"
                                                  href="#collapseThree">
                                                  Student Absent
                                             </a>
                                        </center>
                                   </div>
                                   <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item btn btn-primary text-primary">Absent
                                                       Student</li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
                    <div class="col-sm" style="background-color: #e6ffff;">
                         <div class="row">
                              <center>
                              <div class="content">
                                   <h4>Update Student</h4>
                                   <div class="dev_deg">
                                        <form action="#" method="POST">
                                             <div>
                                                  <label>អត្តលេខសិស្ស</label>
                                                  <input type="text" name="s_id"
                                                       value="<?php echo "{$info['s_id']}"; ?>">
                                             </div>
                                             <div>
                                                  <label>Username</label>
                                                  <input type="text" name="username"
                                                       value="<?php echo "{$info['username']}"; ?>">
                                             </div>
                                             <div>
                                                  <label>Email</label>
                                                  <input type="text" name="email"
                                                       value="<?php echo "{$info['email']}" ?>">
                                             </div>
                                             <div>
                                                  <label>Phone</label>
                                                  <input type="text" name="phone"
                                                       value="<?php echo "{$info['phone']}" ?>">
                                             </div>
                                             <div>

                                                  <div>
                                                       <label>Gender</label>
                                                       <input type="text" name="gender"
                                                            value="<?php echo "{$info['gender']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Age</label>
                                                       <input type="number" name="age"
                                                            value="<?php echo "{$info['age']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Date of Bird</label>
                                                       <input type="date" name="dat"
                                                            value="<?php echo "{$info['dat']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Place of birth</label>
                                                       <input type="text" name="birth"
                                                            value="<?php echo "{$info['birth']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Address</label>
                                                       <input type="text" name="addres"
                                                            value="<?php echo "{$info['addres']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Skill</label>
                                                       <input type="text" name="skill"
                                                            value="<?php echo "{$info['skill']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Grade</label>
                                                       <input type="text" name="grade"
                                                            value="<?php echo "{$info['grade']}" ?>">
                                                  </div>
                                                  <div>
                                                       <label>Shift</label>
                                                       <input type="text" name="shift"
                                                            value="<?php echo "{$info['shift']}" ?>">
                                                  </div>
                                                  <button class="btn btn-success" type="text"
                                                       name="update">Update</button>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                              </center>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <h1>
          <?php echo $_SESSION['name']; ?>
     </h1>
</body>

</html>