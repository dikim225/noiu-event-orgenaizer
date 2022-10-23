<?php
include "koneksi.php";
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO bukutamu (nama_lengkap,email,alamat,pesan) values ('$nama_lengkap' , '$email' , '$alamat' , '$pesan') ";
$kueri =  mysqli_query($koneksi,$sql);
if ($kueri) 
{
    header ("location:Bukutamu.php?sukses");
}
else 
{
    header ("location:Bukutamu.php?gagal");
}