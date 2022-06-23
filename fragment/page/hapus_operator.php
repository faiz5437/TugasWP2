<?php
include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $tgl = date('Y-m-d H:i:s', time());
    // insert into table barang 
    $query = "UPDATE tbl_operator SET deleted_at='$tgl' where id_operator='$id'";

    $delete = $conn->query($query);

    if ($delete) {
?>
        <script>
            confirm("Do you want?");
            window.location = "index.php?hal=daftar_operator";
        </script>
<?php
    }
}
?>