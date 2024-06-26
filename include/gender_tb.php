<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$sql = "SELECT * FROM tb_gender";
$result = mysqli_query($conn, $sql);
?>
<?php
error_reporting(0);
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     header("Location: gender.php");
     exit();

}

?>
<!DOCTYPE html>
<html>

<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
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


     .demo {
          margin-left: 131px;
     }

     .rounded {
          background-color: #cccccc;
     }

     .rounded:hover {
          background-color: #8080ff;
     }

     .table_th {
          color: black;
     }

     .table_name {
          
          margin-left: -10px;
          font-weight: bold;
     
     }

     th {
          text-align: center;
     }

     .header {
          background-color: #ffffff;

     }

     .data {
          color: white;
     }
    
     td{
          text-align: center;
     }
</style>

<body>

     <div>
         
          <?php
          if ($_SESSION['message']) {
               echo $_SESSION['message'];
          }
          unset($_SESSION['message']);
          ?>
          <table id="myTable" border="1px" class="table_name" border="1" style=" width: 550px; " >
               <tr class="header">
                    <th class="table_th" style=" width: 15%; ">ល.រ</th>
                    <th class="table_th">ឈ្មោះ</th>
                   
                    <th class="table_th">ភេទ</th>
                    
                    <th class="table_th">លុប/កែប្រែ</th>
                    
               </tr>
               <?php
                     $i = 1;
               while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="data">
                         <?php echo " <td class='table_td'>" . $i++ . "</td> " ?>
                         <td class="table_td">
                              <?php echo "{$row['username']}" ?>
                         </td>
                         <td class="table_td">
                              <?php echo "{$row['gender']}" ?>
                         </td>
                        
                         <td class="table_td" style=" width: 15%; " >
                              <?php echo "<a onClick=\" javascript:return confirm('Are Your Sure to Delete This')\" href='delete_gender.php?id={$row['id']}' class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></a> <a onclick='document.getElementById('id01').style.display='block'' href='update_gender.php?id={$row['id']}' class='btn btn-success btn-sm' ><i class='fas fa-edit'></i></a>" ?>
                         </td>
                         
                    </tr>
                    
                    <?php
               }
               ?>
          </table>
     </div>

     </div>
     <h1>
          <?php echo $_SESSION['name']; ?>
     </h1>

</body>


</html >