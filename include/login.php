<?php
        include("db_connect.php");
    if (isset($_POST['submit'])) {
        $users = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login where users = '$users' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: home.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>