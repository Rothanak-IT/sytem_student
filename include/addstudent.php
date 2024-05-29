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
        echo "<script type='text/javascript'>alert('Data Upload Success');</script>";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .top {
        float: left;
    }

</style>

<body>
    <div class="container-fluid">
        <?php include "logout.php" ?>
        <div class="row p-0 m-3">
            <div class="col-sm-3" style=" background-color:  #99d6ff; ">
                <div id="accordion">
                    <div class="card"  >
                        <div class="card-header">
                            <a class="btn text-primary" data-bs-toggle="collapse" href="#collapseOne">
                                Student Management
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <?php include "list_conten.php" ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="btn text-info" data-bs-toggle="collapse" href="#collapseTwo">
                                Scoring Mangement
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item btn btn-primary text-primary">Score Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="btn text-success" data-bs-toggle="collapse" href="#collapseThree">
                                Student Absent
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item btn btn-primary text-primary">Absent Student</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm" style="background-color: #f0f0f5; height: 520px; ">
                <div class="row ">
                    <h4 class="text-center text-danger"></h4>
                    <div class="content">
                        <div class="container d-flex justify-content-center">
                            <center>
                                <h5>Add Student</h5>

                                <form action="#" method="POST">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label" style="float: left;" >អត្តលេខសិស្ស</label>
                                            <input type="text" class="form-control" name="s_id" placeholder="">
                                        </div>
                                        <div class="col">
                                            <label class="form-label" style="float: left;">ឈ្មោះ</label>
                                            <input type="text" class="form-control" name="username" placeholder="">
                                        </div>

                                        <div class="col">
                                            <label class="form-label"style="float: left;">អ៊ីមែល</label>
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
                                    <div>
                                        <input class="top btn btn-primary" type="submit" name="submit"
                                            value="Add Student">
                                    </div>

                                </form><br><br><br><br>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="form-control" style=" width: 30%; float: right; "><br>
                                
                        </div>
                        
                        </center>
                    </div>
                </div>
            </div>
            <?php include 'viewstudent.php' ?>
        </div>
    </div>
    </div>

</body>

</html>