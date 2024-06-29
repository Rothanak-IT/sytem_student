

<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (isset($_POST["bsave"])) {
    $username = $_POST["username"];
    $skill = $_POST["skill"];
    $result = "";

    $check = "SELECT*FROM tb_skill";
    $check_user = mysqli_query($conn, $check);
    $row_count = mysqli_num_rows($check_user);
    if ($row_count == 6) {
        echo "<script type='text/javascript'>alert('Username Already Exist. Try Another One');</script>";
    } else {
        $sql = "INSERT INTO tb_skill(username,skill) VALUES ('$username','$skill')";
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

    header("Location: skill_tb.php");
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
            font-family: 'Khmer OS Battambang';
        }

        body {
            width: 100%;
            height: 100vh;
            background-color: #34495e;
            position: relative;
            font-family: 'Khmer OS Battambang';
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 18%;
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

        .demo {
            margin-left: 150px;
        }

        .rounded {
            background-color: #cccccc;
        }

        .rounded:hover {
            background-color: #8080ff;
        }

        h3 {
            color: #ffffff;
        }

        label {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="main">
                <center>
                    <h3><img style=" width: 6%; height: 68px; float: left; border-radius: 500px; " src="kossomak.png" alt=""><i class="fas fa-user-graduate"></i> ប្រព័ន្ធគ្រប់គ្រងនិស្សិត <a style=" float: right; "
                            href="">Logout</a></h3>
                </center>
            </div>
            <div class="sidenav" style="height:560px; top: 18%;">
                <a href="home.php"><i class="fas fa-home"> ទំព័ដើម</i></a>

                <button class="dropdown-btn"><i class="fas fa-user-graduate"></i> គ្រប់គ្រងនិស្សិត<i
                        class="fa fa-caret-down"></i></button>

                <div class="dropdown-container">
                    <a href="addstudent.php">បញ្ចូល​ សិស្ស</a>
                    <a href="gender.php">បញ្ចូល​ ភេទ</a>
                    <a href="grade.php">បញ្ចូល​​ ថ្នាក់</a>
                    <a href="skill.php">បញ្ចូល​​ ជំនាញ</a>
                    <a href="shift.php">បញ្ចូល​​ វេន</a>
                    <!-- <a href="#">បញ្ចូល​​ ឆ្នាំ</a> -->
                    <a href="#">បញ្ចូល​​ ក្រុម</a>
                </div>
                <button class="dropdown-btn"> <i class="fas fa-book-reader"></i> ពិន្ទុកនិស្សិត<i
                        class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <button class="dropdown-btn"><i class="fas fa-user-cog"></i></i> គ្រប់គ្រងបុគ្គលិក
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <button class="dropdown-btn"><i class="fas fa-users"></i> សិស្សអវត្តមាន<i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <button class="dropdown-btn"><i class="fas fa-money-check-alt"></i> ការទូទាត់របស់សិស្ស <i
                        class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div>
    <di class="conten">
        <center >
            <form action="" method="post" style=" width: 60%; " >
            <h3 class=" mt-3">បញ្ចូល​ជំនាញសិស្ស</h3>
                <div class="row ">
                    <div class="col">
                        <label class="form-label" style="float: left;">ឈ្មោះ</label>
                        <input type="text" class="form-control" name="username" placeholder="">
                    </div>
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
                    </div>         

                    </div>
                </div><br>
                <button class="btn btn-primary" name="bsave">save</button>
                <br><br>
                <?php include "skill_tb.php" ?>
            </form>
        </center>
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