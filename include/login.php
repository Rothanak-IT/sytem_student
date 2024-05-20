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

<body style="background-image: url('img/skay.png')">
    <div class="container-fluild">
        <div id="wrapper">
            <div id="menuhead" class="img1" style="background: #0099D3; margin-top: -10%;">
                <div class="floatleft shadow "> <img class="image1" style="margin-top: 0.70%;" src="img/system.png" />
                    <h2 style="display: inline; font-weight: bold; margin: 10px;"> Student Management
                        System </h2>
                </div>
                <div class="floatright" style="margin-top: 10px;"> <img src="" width="200"></div>
            </div>

            <div class="row" style="width: 80%; margin: 0 auto;">
                <h5 style="border: 1px solid gold; background: rgba(0,0,0,0.5); text-align: center; border-radius: 15px; padding: 10px; width: 100%; margin-top: 2%">
                    <img class="top" src="img/logosystem.png" width="50">
                    <b class="text"> IT Management System </b>
                </h5>
            </div>

        </div>

        <div class="row">
            <form action="home.php" method="post" style="width: 50%; margin: 0 auto;">
                <h2 style=" text-align: center;">Login System</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
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