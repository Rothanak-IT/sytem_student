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
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
     label {
          margin-right: 60px;
     }

     .table {
          width: 100%;
     }

     th {
          background-color: #0066cc;
          color: white;
     }
</style>

<body>

     <div>
          <div class="content">
               <center>
                    <h4>View Student</h4>
               </center>
               <?php
               if ($_SESSION['message']) {
                    echo $_SESSION['message'];
               }
               unset($_SESSION['message']);
               ?>
               <table id="myTable" border="1px" class="table table-bordered"
                    style='font-family: Times New Roman, Times, serif ; font-size: 14px;'>
                    <tr>
                         <th class="table_th">អត្តលេខ</th>
                         <th class="table_th">ឈ្មោះ</th>
                         <th class="table_th">អ៊ីមែល</th>
                         <th class="table_th">លេខទូរស័ព្ទ</th>
                         <th class="table_th">ភេទ</th>
                         <th class="table_th">អាយុ</th>
                         <th class="table_th">ថ្ងៃខែឆ្នាំកំណើត</th>
                         <th class="table_th">ទីកន្លែងកំណើត</th>
                         <th class="table_th">អាស័យដ្ថាន</th>
                         <th class="table_th">ជំនាញ</th>
                         <th class="table_th">រៀនថ្នាក់</th>
                         <th class="table_th">ម៉ោង</th>
                         <th class="table_th">លុប</th>
                         <th class="table_th">កែប្រែ</th>
                    </tr>
                    <?php
                    while ($info = $result->fetch_assoc()) {
                         ?>
                         <tr>
                              <td class="table_td">
                                   <?php echo "{$info['s_id']}" ?>
                              </td>
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
<script>
    
     function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
               td = tr[i].getElementsByTagName("td")[0];
               if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                         tr[i].style.display = "";
                    } else {
                         tr[i].style.display = "none";
                    }
               }
          }
     }      
</script>

</html>