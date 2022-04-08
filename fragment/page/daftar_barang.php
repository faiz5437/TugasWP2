<?php 
include("conn.php");

$data = $conn->query("SELECT * FROM tbl_barang order by id_barang asc");

// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    while($value = $data->fetch_array()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$value['kode_barang'];?></td>
                                <td><?=$value['nama_barang'];?></td>
                                <td><?=$value['satuan'];?></td>
                                <td><?=$value['id_operator'];?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
                                </td>
                            </tr>
                        <?php
                        $no++;
                    }

                ?>
                
                
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Operator</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>