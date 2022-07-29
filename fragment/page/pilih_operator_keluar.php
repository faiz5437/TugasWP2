<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

$query_operator = "SELECT * FROM `tbl_operator` WHERE deleted_at is NULL;";

$data_operator = $conn->query($query_operator);

if (isset($_POST['simpan'])) {
    $id_operator = $_POST['id_barang'];
    // insert into table barang masuk
?>
    <script>
        alert("Berhasil memilih data operator ");
        window.location = "index.php?hal=tambah_brg_keluar&id=<?= $id_operator; ?>";
    </script>
<?php
}

?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">pilih operator</h3>
        </div>

        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Barang</label>
                    <select name="id_barang" class="form-control">
                        <?php

                        while ($item = $data_operator->fetch_array()) {
                            echo '<option value="' . $item['id_operator'] . '">' . $item['id_operator'] . ' - ' . $item['nama_operator'] . '</option>';
                        }
                        // var_dump($item);
                        // die();
                        ?>

                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>