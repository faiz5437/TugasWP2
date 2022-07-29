<?php
include("../conn.php");
// var_dump($conn);
$username = "";
$tgl = date('Y-m-d H:i:s', time());
if (isset($_POST['regis'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_u = "SELECT * FROM tbl_operator WHERE username='$username'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Maaf ... Username Sudah Ada Silahkan Pakai Username Lain";
        echo "<script type='text/javascript'>alert('$name_error');</script>";
    } else {

        $sql = "INSERT INTO `tbl_operator`(`nama_operator`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES 
    ('$nama','$username','$password','$email','$tgl','$tgl')";
        $sqlUser = "SELECT username FROM tbl_operator ORDER BY id_operator DESC LIMIT 1";
        $queryInsert = $conn->query($sql);
        $queryUser = $conn->query($sqlUser);
        $getUser = $queryUser->fetch_array();
        $getUsername = md5($getUser[0]);
        // var_dump($getUsername);
        // die;
        header("location:index.php?id=$getUsername");
        // exit();
    }




    // var_dump($getId);
    // die;
    // if ($queryInsert) {
    //     header("location:../login.php?");
    // }
    // echo "$name, $email";
    // header("location:../index.php");
    // var_dump($password);
    // die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Registrasi Operator</h2>
                    <form method="POST">
                        <div class=" row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="nama" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <a href="../login.php" style="text-decoration: none;">Kembali</a>
                            <div class="p-t-15">
                                <button name="regis" class="btn btn--radius-2 btn--blue" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->