<?php

$nama_operator = "";
$email = "";
$username = "";
if (isset($_POST['simpan'])) {
    include("./conn.php");
    date_default_timezone_set("Asia/Jakarta");

    $nama_operator = $_POST['nama_operator'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 

    $sql_u = "SELECT * FROM tbl_operator WHERE username='$username' and deleted_at is NULL";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $err = "Maaf ... Username Sudah Ada Silahkan Pakai Username Lain";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Maaf Username Sudah Ada. Silahkan Coba Yang Lain');
    window.location.href='index.php?hal=tambah_operator';
    </script>");
        // echo "<script type='text/javascript'>alert('$name_error');</script>";
    } else {


        $query = "INSERT INTO `tbl_operator` (`nama_operator`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES ('$nama_operator', '$username', '$password', '$email', '$tgl', '$tgl');";
    }

    $insert = $conn->query($query);

    if ($insert) {
?>
        <script>
            alert("Berhasil menambahkan data");
            window.location = "index.php?hal=daftar_operator";
        </script>
<?php
    }
}
?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Operator</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Operator</label>
                    <input type="text" class="form-control" name="nama_operator" value="<?= $nama_operator ?>" placeholder="Nama Operator">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $email ?>" placeholder="Email Operator">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $username ?>" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="pass">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">U langi Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="conpass">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary" id="btnSubmit">Simpan</button>
            </div>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                $(function() {
                    $("#btnSubmit").click(function() {
                        var password = $("#pass").val();
                        var confirmPassword = $("#conpass").val();
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        return true;
                    });
                });
            </script>
        </form>
    </div>
</div>