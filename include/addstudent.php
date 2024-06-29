<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (isset($_POST["submit"])) {
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
    $result = "";
    $check = "SELECT*FROM user WHERE username='$username'";
    $check_user = mysqli_query($conn, $check);
    $row_count = mysqli_num_rows($check_user);
    if ($row_count == 6) {
        echo "<script type='text/javascript'>alert('Username Already Exist. Try Another One');</script>";
    } else {
        $sql = "INSERT INTO user(username,email,phone,usertype,gender,age,dat,birth,addres,skill,grade,shift,s_id) VALUES ('$username','$email','$phone','$usertype','$gender','$age','$dat','$birth','$addres','$skill','$grade','$shift','$s_id')";
        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
        echo "<script  type='text/javascript'>alert('Data Upload Success');</script>";
    } else {
        echo "Data Upload Faild";
    }
}
?>
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    header("Location: addstudent.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
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
               height: 761px;
               /* position: fixed; */
               z-index: 1;
               top: 18%;
               left: 0;
               background-color: #111;
               overflow-x: hidden;
               /* padding-top: 20px; */
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
                          ;
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
               color: black;
          }
          i{
            color: blue;
          }
          .dd{
            
            display: flex;
           
          }
     </style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="main" style=" background-color:   #cccccc;  ">
                <center>
                    <h3><img style=" width: 6%; height: 68px; float: left; border-radius: 500px; " src="kossomak.png" alt=""><i class="fas fa-user-graduate"></i> ប្រព័ន្ធគ្រប់គ្រងនិស្សិត <a style=" float: right; " href=""><button class="btn btn-primary" >Logout</button></a></h3>
                </center>
            </div>
        </div>
    </div>
    <div>
        <div class="conten dd">
        <?php include "list_conten.php" ?>
            <center>
                <div class="content" >
                    
                    <div class="col">
                        <header>
                            <center>
                                <h4 style=" font-size: 25px; font-weight: bold; color: white; "><i class="fas fa-user-graduate"></i> បញ្ចូលឈ្មោះ​សិស្ស</h4>
                            </center>
                        </header><br><br>
                        <div class="w3-container p-2 " style="margin-left: 119px" >
                            <center>
                                <form action="#" method="POST" >
                                    <div class="row mb-3" >
                                        <div class="col">
                                            <label class="form-label" style="float: left;">អត្តលេខសិស្ស</label>
                                            <input type="text" class="form-control" name="s_id" required >
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ឈ្មោះ</label>
                                            <input type="text" class="form-control" name="username" required >
                                        </div>

                                        <div class="col">
                                            <label class="form-label" style="float: left;">អ៊ីមែល</label>
                                            <input type="text" class="form-control" name="email" required >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label" style="float: left;">លេខទូរស័ព្ទ</label>
                                            <input type="text" class="form-control" name="phone" required >
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ភេទ</label>
                                            <select name="gender" class="form-control">
                                                <option value="ប្រុស">ប្រុស</option>
                                                <option value="ស្រី">ស្រី</option>
                                                <option value="ផ្សេងៗ">ផ្សេងៗ</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">អាយុ</label>
                                            <input type="number" class="form-control" name="age" required >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ថ្ងៃខែឆ្នាំកំណើត</label>
                                            <input type="date" class="form-control" name="dat" required >
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ទីកន្លែងកំណើត</label>
                                            <input type="text" class="form-control" name="birth" required >
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">អាស័យដ្ថាន</label>
                                            <input type="text" class="form-control" name="addres" required >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ជំនាញ</label>
                                            <select name="skill" class="form-control" required>
                                                <option value="វិស្វកម្មអគ្គិសនី">វិស្វកម្មអគ្គិសនី</option>
                                                <option value="វិស្វកម្មអេឡិចត្រូនិច">វិស្វកម្មអេឡិចត្រូនិច</option>
                                                <option value="វិស្វកម្មសំណង់សុីវិល">វិស្វកម្មសំណង់សុីវិល</option>
                                                <option value="វិស្វកម្មទីផ្សារ">វិស្វកម្មទីផ្សារ</option>
                                                <option value="វិស្វកម្ម Accounting">វិស្វកម្ម Accounting</option>
                                                <option value="វិស្វកម្មបច្ចេកវិទ្យា">វិស្វកម្មបច្ចេកទេស</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="" style="float: left;">រៀនថ្នាក់</label>
                                            <select name="grade" class="form-control" required>
                                                <option value="ថ្នាក់បរិញ្ញាបត្រ">ថ្នាក់បរិញ្ញាប័ត្រ</option>
                                                <option value="ថ្នាក់បរិញ្ញាបត្ររង">ថ្នាក់បរិញ្ញាប័ត្ររង</option>
                                                <option value="ថ្នាក់បណ្ឌិត">ថ្នាក់បណ្ឌិត</option>
                                                <option value="ថ្នាក់អនុបណ្ឌិត">ថ្នាក់អនុបណ្ឌិត</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ម៉ោង</label>
                                            <select name="shift" class="form-control" required>
                                                <option value="វេនព្រឹក">វេនព្រឹក</option>
                                                <option value="វេនរសៀល">វេនរសៀល</option>
                                                <option value="វេនយប់">វេនយប់</option>
                                                <option value="វិស្វកម្មសំណង់សុីវិល">វេន​ សៅរ៍-អាទិត្យ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="" style=" float: right; ">
                                        <input class="top btn btn-primary" type="submit" name="submit"
                                            value="បញ្ចូលសិស្ស">
                                        <!-- <input class="btn btn-danger" type="submit" name="close" value="បិទ"> -->
                                    </div>

                                </form>
                        </div>
            </center>
            
        </div>
        
        </center>
    </div>
    <?php include 'viewstudent.php' ?>
    <!-- <div class="row ">
                <h4 class="text-center text-danger"></h4>
                <div class="content">
                   
                    <div id="id01" class="w3-modal demo">
                        <div class="w3-modal-content w3-card-2"style='width: 1073px ' >
                            <header class="w3-container w3-teal">
                                <span onclick="document.getElementById('id01').style.display='none'"
                                    class="w3-button w3-display-topright">&times;</span>
                                <center><h5>បញ្ចូលឈ្មោះ​សិស្ស</h5></center>
                            </header>
                            <div class="w3-container p-2 ">
                                <center>
                                    <form action="#" method="POST">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label" style="float: left;">អត្តលេខសិស្ស</label>
                                                <input type="text" class="form-control" name="s_id" required >
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ឈ្មោះ</label>
                                                <input type="text" class="form-control" name="username" placeholder="">
                                            </div>

                                            <div class="col">
                                                <label class="form-label" style="float: left;">អ៊ីមែល</label>
                                                <input type="text" class="form-control" name="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label" style="float: left;">លេខទូរស័ព្ទ</label>
                                                <input type="text" class="form-control" name="phone" placeholder="">
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ភេទ</label>
                                                <select name="gender" class="form-control">
                                                    <option value="ប្រុស">ប្រុស</option>
                                                    <option value="ស្រី">ស្រី</option>
                                                    <option value="ផ្សេងៗ">ផ្សេងៗ</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">អាយុ</label>
                                                <input type="number" class="form-control" name="age" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ថ្ងៃខែឆ្នាំកំណើត</label>
                                                <input type="date" class="form-control" name="dat" placeholder="">
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ទីកន្លែងកំណើត</label>
                                                <input type="text" class="form-control" name="birth" placeholder="">
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">អាស័យដ្ថាន</label>
                                                <input type="text" class="form-control" name="addres" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ជំនាញ</label>
                                                <select name="skill" class="form-control">
                                                    <option value="វិស្វកម្មអគ្គិសនី">វិស្វកម្មអគ្គិសនី</option>
                                                    <option value="វិស្វកម្មអេឡិចត្រូនិច">វិស្វកម្មអេឡិចត្រូនិច</option>
                                                    <option value="វិស្វកម្មសំណង់សុីវិល">វិស្វកម្មសំណង់សុីវិល</option>
                                                    <option value="វិស្វកម្មទីផ្សារ">វិស្វកម្មទីផ្សារ</option>
                                                    <option value="វិស្វកម្ម Accounting">វិស្វកម្ម Accounting</option>
                                                    <option value="វិស្វកម្មបច្ចេកវិទ្យា">វិស្វកម្មបច្ចេកទេស</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="" style="float: left;">រៀនថ្នាក់</label>
                                                <select name="grade" class="form-control">
                                                    <option value="ថ្នាក់បរិញ្ញាបត្រ">ថ្នាក់បរិញ្ញាប័ត្រ</option>
                                                    <option value="ថ្នាក់បរិញ្ញាបត្ររង">ថ្នាក់បរិញ្ញាប័ត្ររង</option>
                                                    <option value="ថ្នាក់បណ្ឌិត">ថ្នាក់បណ្ឌិត</option>
                                                    <option value="ថ្នាក់អនុបណ្ឌិត">ថ្នាក់អនុបណ្ឌិត</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="form-label" style="float: left;">ម៉ោង</label>
                                                <select name="shift" class="form-control">
                                                    <option value="វេនព្រឹក">វេនព្រឹក</option>
                                                    <option value="វេនរសៀល">វេនរសៀល</option>
                                                    <option value="វេនយប់">វេនយប់</option>
                                                    <option value="វិស្វកម្មសំណង់សុីវិល">វេន​ សៅរ៍-អាទិត្យ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="" style=" float: right; " >
                                            <input class="top btn btn-primary" type="submit" name="submit"
                                                value="បញ្ចូលសិស្ស">
                                                <input class="btn btn-danger" type="submit" name="close"
                                                value="បិទ">
                                        </div>

                                    </form>
                            </div>
                            </center>
                        </div>

                    </div>
                </div>
                
            </div> -->
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