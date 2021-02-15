<?php
session_start();

if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Karyawan | PT Sampoerna Mild</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <a href="menuUtama.php" class="navbar-brand page">PT HM SAMPOERNA Tbk.</a>
            </div>



            <ul class="nav navbar-nav navbar-right">


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: white;"><?php echo $_SESSION['username']; ?></span>
                        <img class="img-profile rounded-circle" src="image/undraw_profile.svg" width="26" height="26">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="editProfile.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="config/logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>


        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container">

        <!-- add/edit form modal -->
        <center>
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data karyawan <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        </center>

        <form action="config/proses_tambahkaryawan.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="nama" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Jabatan:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" id="email" name="jabatan" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Alamat:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="alamat" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Photo:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photo" id="userphoto">
                            <label class="custom-file-label" for="userphoto">Choose file</label>
                        </div>
                    </div>

                </div>

            </div>
            <center>
                <div>


                    <button type="submit" class="btn btn-success" id="addButton">Submit</button>

                </div>
            </center>
        </form>

        <!-- add/edit form modal end -->

        <div>

            <!-- JS, Popper.js, and jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        </div>

</body>


</html>