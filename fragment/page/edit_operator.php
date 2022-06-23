<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");
$id = $_GET['id'];

$query = "SELECT * FROM tbl_operator where id_operator='$id'";

$data = $conn->query($query);

while ($value = $data->fetch_array()) {
    $nama_operator = $value['nama_operator'];
    $email = $value['email'];
    $username = $value['username'];
    $password = $value['password'];
}

if (isset($_POST['ubah'])) {
    $nama_operator = $_POST['nama_operator'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "UPDATE tbl_operator SET nama_operator='$nama_operator', email='$email', username='$username',password='$password', updated_at='$tgl' where id_operator='$id'";

    $update = $conn->query($query);

    if ($update) {
?>
        <script>
            alert("Berhasil mengubah data");
            window.location = "index.php?hal=daftar_barang";
        </script>
<?php
    }
}
?>


<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Barang</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" name="nama_operator" value="<?= $nama_operator; ?>" placeholder="Masukkan kode barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" name="email" value="<?= $email; ?>" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Harga Barang</label>
                    <input type="text" class="form-control" name="username" value="<?= $username; ?>" placeholder="Masukan harga barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $password; ?>" placeholder="Masukan harga barang">
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>