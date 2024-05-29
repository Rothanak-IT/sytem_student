<!DOCTYPE html>
<html lang="en" ng-app="complete">

<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='-1'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    </style>
</head>

<body>
    <div class="container-fluild">
        <div class="row">
            <form action="home.php" method="post" style="width: 50%; margin: 0 auto;">
                <h2 style=" text-align: center;">Login System</h2>
                <label style="color: white;">User Name</label>
                <input type="text" class="form-control" name="uname" placeholder="User Name"
                    style="background: rgba(0, 0, 0, 0.3)"><br>
                <label style="color: white;">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password"
                    style="background: rgba(0, 0, 0, 0.3)"><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>