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
      background-color: #cccccc;
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
      color: black;
    }
    i{
      color: blue;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="main">
        <center>
          <h3 style=" font-size: 25px; font-weight: bold; "><img style=" width: 6%; height: 68px; float: left; border-radius: 500px; " src="kossomak.png" alt=""><i class="fas fa-user-graduate"></i> ប្រព័ន្ធគ្រប់គ្រងនិស្សិត <a style=" float: right; "
              href="index.php"><button class="btn btn-primary" >Logout</button></a></h3>
        </center>
       
      </div>
      
      <?php include "list_conten.php" ?>
    </div>
  </div>
  <div class="conten">
    <center>
      <div class="col-sm">
        <div class="row">
          <h4 class="text-center text-danger"></h4>
          <div class="content">
            <div class="col-sm-9" style=" width: 100%;">
              <h4 class="text-center text-danger mt-3">Admin Dashboard</h4>
              <div class="row">
                <div class="col rounded  p-5  text-white m-2 btn " style="width: 600px; height: 150px; ">
                  <h5><i class="fas fa-user-graduate"></i> Total Students</h5>
                </div>
                <div class="col rounded p-5  text-white m-2 btn" style="width: 600px; height: 150px; ">
                  <h5><i class="fas fa-users"></i> Total Course</h5>
                </div>
                <div class="col rounded p-5 text-white m-2 btn" style="width: 600px; height: 150px; ">
                  <h5><i class="fas fa-book-open"></i> Total Enrollments</h5>
                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div>
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