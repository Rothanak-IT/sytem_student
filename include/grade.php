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
                            ការគ្រប់គ្រងនិស្សិត
                            </a>
                        </div>
                        <?php include "list_conten.php" ?>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="btn text-info" data-bs-toggle="collapse" href="#collapseTwo">
                            ការគ្រប់គ្រងពិន្ទុ
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
                            សិស្សអវត្តមាន
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
                            <h4 class="text-center text-danger mt-3">Add Grade</h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="">រៀនថ្នាក់</label>
                                    <select name="grade" class="form-control">
                                        <option value="ថ្នាក់បរិញ្ញាបត្រ">ថ្នាក់បរិញ្ញាប័ត្រ</option>
                                        <option value="ថ្នាក់បរិញ្ញាបត្ររង">ថ្នាក់បរិញ្ញាប័ត្ររង</option>
                                        <option value="ថ្នាក់បណ្ឌិត">ថ្នាក់បណ្ឌិត</option>
                                        <option value="ថ្នាក់អនុបណ្ឌិត">ថ្នាក់អនុបណ្ឌិត</option>
                                    </select><br>
                                    <div>
                                        <input class="top btn btn-primary" type="submit" name="submit" value="save">
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