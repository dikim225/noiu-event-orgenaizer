<?php
include "koneksi.php";
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

$sql = "UPDATE bukutamu SET nama_lengkap = '$nama_lengkap' , email = '$email' , alamat = '$alamat' pesan = '$pesan')
 WHERE id_bukutamu = '".$_POST['id_bukutamu']."'";
$kueri = mysqli_query($koneksi,$sql);
if ($kueri) {
    header("location:Bukutamu.php?sukses");
}
else
{
    header("location:Bukutamu.php?gagal");
}