<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$info = $result->fetch_assoc();
if (isset($_POST["update"])) {
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
     $query = "UPDATE user SET username='$username',email='$email',phone='$phone', gender='$gender',age='$age',dat='$dat',birth='$birth',addres='$addres',skill='$skill',grade='$grade',shift='$shift',s_id='$s_id' WHERE id='$id'";
     $result2 = mysqli_query($conn, $query);
     if ($result2) {
          header("location: addstudent.php");
          exit();
     } 
}
?>
<?php
error_reporting(0);
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     header("Location: update.php");
     exit();
}

?>


<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style>
          * {
               font-family: 'Khmer OS Muol, khmer OS';
          }

          body {
               width: 100%;
               height: 100vh;
               background-color: #34495e;
               position: relative;
               font-family: 'Khmer OS Muol, khmer OS';
          }

          .sidenav {
               height: 100%;
               width: 250px;
               position: fixed;
               z-index: 1;
               top: 13%;
               left: 0;
               background-color: #111;
               overflow-x: hidden;
               padding-top: 20px;
          }


          .sidenav a,
          .dropdown-btn {
               padding: 6px 8px 6px 16px;
               text-decoration: none;
               font-size: 20px;
               color: #818181;
               display: block;
               border: none;
               background: none;
               width: 100%;
               text-align: left;
               cursor: pointer;
               outline: none;
          }


          .sidenav a:hover,
          .dropdown-btn:hover {
               color: #f2f2f2;

          }

          .main {
               /* margin-left: 134px; */
               font-size: 20px;
               padding: 15px;
               background-color: #04AA6D;
               width: 1985px;
          }


          .active {
               background-color: green;
               color: white;
          }


          .dropdown-container {
               display: none;
               background-color: #262626;
               padding-left: 8px;
          }


          .fa-caret-down {
               float: right;
               padding-right: 8px;
          }


          @media screen and (max-height: 450px) {
               .sidenav {
                    padding-top: 15px;
               }

               .sidenav a {
                    font-size: 18px;
               }
          }

          .conten {
               margin-left: 251px;
          }

          button {
               float: right;
               margin-left: 30px;
          }

         

          .rounded {
               background-color: #cccccc;
          }

          .rounded:hover {
               background-color: #8080ff;
          }

          label {
               color: #ffffff;
          }

          h3 {
               color: #ffffff;
          }
     </style>
</head>

<body>
     <div class="container-fluid">
          <div class="row">
               <div class="main">
                    <center>
                         <h3><i class="fas fa-user-graduate"></i> ប្រព័ន្ធគ្រប់គ្រងនិស្សិត <a style=" float: right; "
                                   href="">Logout</a></h3>
                    </center>
               </div>
               <?php include "list_conten.php" ?>
          </div>
     </div>
     <div class="conten">
          <center>
          <div class="content">
                              <div class="col">
                              <center><h3>​<i class="fas fa-user-graduate"></i> កែប្រែព័ត៌មានសិស្ស</h3></center>
                                   <div class="row" style=" margin-left: 90px; " >

                                   
                                             
                                             <form action="#" method="POST">
                                                  
                                                  <div class="row mb-3">
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">អត្តលេខសិស្ស</label>
                                                            <input type="text" class="form-control" name="s_id"
                                                                 value="<?php echo "{$info['s_id']}"; ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ឈ្មោះ</label>
                                                            <input type="text" class="form-control" name="username"
                                                                 value="<?php echo "{$info['username']}"; ?>">
                                                       </div>

                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">អ៊ីមែល</label>
                                                            <input type="text" class="form-control" name="email"
                                                                 value="<?php echo "{$info['email']}" ?>">
                                                       </div>
                                                  </div>
                                                  <div class="row mb-3">
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">លេខទូរស័ព្ទ</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                 value="<?php echo "{$info['phone']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ភេទ</label>
                                                            <input type="text" class="form-control" name="gender"
                                                                 value="<?php echo "{$info['gender']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">អាយុ</label>
                                                            <input type="number" class="form-control" name="age"
                                                                 placeholder="" value="<?php echo "{$info['age']}" ?>">
                                                       </div>
                                                  </div>
                                                  <div class="row mb-3">
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ថ្ងៃខែឆ្នាំកំណើត</label>
                                                            <input type="date" class="form-control" name="dat"
                                                                 value="<?php echo "{$info['dat']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ទីកន្លែងកំណើត</label>
                                                            <input type="text" class="form-control" name="birth"
                                                                 value="<?php echo "{$info['birth']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">អាស័យដ្ថាន</label>
                                                            <input type="text" class="form-control" name="addres"
                                                                 value="<?php echo "{$info['addres']}" ?>">
                                                       </div>
                                                  </div>
                                                  <div class="row mb-3">
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ជំនាញ</label>
                                                            <input type="text" class="form-control" name="skill"
                                                                 value="<?php echo "{$info['skill']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="" style="float: left;">រៀនថ្នាក់</label>
                                                            <input type="text" class="form-control" name="grade"
                                                                 value="<?php echo "{$info['grade']}" ?>">
                                                       </div>
                                                       <div class="col">
                                                            <label class="form-label"
                                                                 style="float: left;">ម៉ោង</label>
                                                            <input type="text" class="form-control" name="shift"
                                                                 value="<?php echo "{$info['shift']}" ?>">
                                                       </div>
                                                  </div>
                                                  <button class="btn btn-success" type="text"
                                                       name="update">កែប្រែ</button>
                                             </form>
                                   
                                   </div>
                              </div>
                         </div>
               
          </center>
     </div>
     

     </div>
     <script>

          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
               dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                         dropdownContent.style.display = "none";
                    } else {
                         dropdownContent.style.display = "block";
                    }
               });
          }
     </script>

</body>

</html>