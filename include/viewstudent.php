<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$sql = "SELECT * FROM user WHERE usertype='student'";
$result = mysqli_query($conn, $sql);
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
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     </head>
    <style>
        .table_th {
               padding: 5px;
               font-size: 11px;
          }
          .table_td {
               padding: 3px;
               background-color: gray;
          }
          label{
            margin-right: 60px;
          }
          th{
            background-color: white;
          }
    </style>

     <body>

          <div>
               <div class="content">
                    <h4>View Student</h4>
                    <?php
                    if ($_SESSION['message']) {
                         echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                    ?>
                    <table border="1px">
                         <tr>
                              <th class="table_th">UserName</th>
                              <th class="table_th">Email</th>
                              <th class="table_th">Phone</th>
                              <th class="table_th">Password</th>
                              <th class="table_th">Gender</th>
                              <th class="table_th">Age</th>
                              <th class="table_th">Date</th>
                              <th class="table_th">Birth</th>
                              <th class="table_th">Address</th>
                              <th class="table_th">Skill</th>
                              <th class="table_th">Grade</th>
                              <th class="table_th">Shift</th>
                              <th class="table_th">Delete</th>
                              <th class="table_th">Update</th>
                         </tr>
                         <?php
                         while ($info = $result->fetch_assoc()) {
                              ?>
                              <tr>
                                   <td class="table_td">
                                        <?php echo "{$info['username']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['email']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['phone']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['pass']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['gender']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['age']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['dat']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['birth']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['addres']}" ?>
                                   </td>
                                   
                                   <td class="table_td">
                                        <?php echo "{$info['skill']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['grade']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['shift']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "<a onClick=\" javascript:return confirm('Are Your Sure to Delete This')\" href='delete.php?student_id={$info['id']}' class='btn btn-danger'>Delete</a>" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "<a href='update.php?student_id={$info['id']}' class='btn btn-success'>Update</a>" ?>
                                   </td>
                              </tr>
                              <tr>
                                   
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

     </html>
    