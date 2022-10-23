<?php
include "koneksi.php";
$id_bukutamu = $_GET['id_bukutamu'];

$sql = "DELETE FROM bukutamu WHERE id_bukutamu = '".$id_bukutamu."'";
$kueri = mysqli_query($koneksi,$sql);
if ($kueri) {
    header("location:Bukutamu.php?sukses_hapus");
} else {
    header("location:Bukutamu.php?gagal_hapus");
}