<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>

</style>

<body>
    <div class="container-fluid">

        <?php include "logout.php" ?>

        <div class="row p-0 m-3">
            <div class="col-sm-3">
                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="btn text-primary" data-bs-toggle="collapse" href="#collapseOne">
                                Student Management
                            </a>
                        </div>
                        <?php include "list_conten.php" ?>
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
            <div class="col-sm" style="background-color: #e6ffff;">
                <div class="row">
                    <h4 class="text-center text-danger"></h4>
                    <div class="content ">
                        <div class="col-sm " style="background-color: #e6ffff;">
                            <h4 class="text-center text-danger mt-3">Add Gender</h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">ភេទ</label>
                                    <select name="gender" class="form-control">
                                        <option value="ប្រុស">ប្រុស</option>
                                        <option value="ស្រី">ស្រី</option>
                                        <option value="ផ្សេងៗ">ផ្សេងៗ</option>
                                    </select><br>
                                    <div>
                                        <input class="btn btn-primary" type="submit" name="submit" value="save">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>