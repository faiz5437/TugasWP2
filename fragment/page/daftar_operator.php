<?php
include("conn.php");

$data = $conn->query("SELECT * from tbl_operator where deleted_at is null");
// var_dump($data);
// die;
// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Operator</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Operator</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($value = $data->fetch_array()) {
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['nama_operator']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['username']; ?></td>
                        <td>
                            <a href="index.php?hal=edit_operator&id=<?= $value['id_operator']; ?>" class="btn btn-sm btn-primary">
                                <i class="far fa-edit"></i>
                                Edit
                            </a>
                            <a href="index.php?hal=hapus_operator&id=<?= $value['id_operator']; ?>" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                }

                ?>


            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </tfoot> -->
        </table>
    </div>

</div>