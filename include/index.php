<?php
include ("db_connect.php");
include ("login.php")
    ?>

<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    * {
        font-family: 'Khmer OS Battambang';
    }

    body {
        background-color: #e6e6e6;
        font-family: 'Khmer OS Battambang';
    }

    #form {
        background-color: rgb(255, 255, 255);
        width: 25%;
        border-radius: 4px;
        margin: 120px auto;
        padding: 50px;
        /* box-shadow: 0px 1px 5px rgb(82, 11, 77); */
    }

    #btn {
        color: rgb(255, 255, 255);
        background-color: rgb(108, 22, 189);
        /* padding:10px; */
        font-size: large;
        border-radius: 10px;
    }

    @media screen and (max-width: 570px) {
        #form {
            width: 65%;
            margin-left: none;
            padding: 40px;
        }
    }
</style>

<body>

    <div id="form">
        <h3>Login System</h3>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" class="form-control" id="user" name="user"></br>
            <label>Password: </label>
            <input type="password" class="form-control" id="pass" name="pass"></br>
            <input type="submit" class="btn btn-primary " id="btn" value="Login" name="submit" />
        </form>
    </div>
    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.length == "" && pass.length == "") {
                alert(" Username and password field is empty!!!");
                return false;
            }
            else if (user.length == "") {
                alert(" Username field is empty!!!");
                return false;
            }
            else if (pass.length == "") {
                alert(" Password field is empty!!!");
                return false;
            }

        }
    </script>
</body>

</html>