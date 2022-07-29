<?php
include("conn.php");
// var_dump($conn);
$username = "";
$nama = "";
$email = "";
$err = "";
$tgl = date('Y-m-d H:i:s', time());
if (isset($_POST['regis'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_u = "SELECT * FROM tbl_operator WHERE username='$username'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $err = "Maaf ... Username Sudah Ada Silahkan Pakai Username Lain";
        // echo "<script type='text/javascript'>alert('$name_error');</script>";
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
        // echo "<script type='text/javascript'>alert('sukses mendaftarkan operator');</script>";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Ditambahkan');
    window.location.href='login.php';
    </script>");
        // header("location:login.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="container my-4">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Pendaftaran Operator</div>
                </div>
                <div style="padding-top:30px" class="panel-body">
                    <?php if ($err) { ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">
                            <ul><?php echo $err ?></ul>
                        </div>
                    <?php } ?>
                    <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="nama" type="text" class="form-control" name="nama" value="<?php echo $nama ?>" placeholder="Nama Lengkap">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="email" value="<?php echo $nama ?>" placeholder="email">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="<?php echo $username ?>" placeholder="username">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div style="margin-top:10px; margin-bottom: 30px;" class="form-group">
                            <div class="col-sm-12 controls">
                                <input type="submit" name="regis" class="btn btn-success" value="Login" />
                            </div>
                        </div>

                        <a href="login.php">Kembali Ke Login</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>