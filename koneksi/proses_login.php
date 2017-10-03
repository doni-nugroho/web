<?php 
require_once "../koneksi.php";
// $sql = "select * FROM tb_produk ORDER BY nama_produk limit 12";
// $hasil = mysqli_query($koneksi, $sql);

$username = $_POST['username'];
$password = $_POST['password'];
$login    = mysqli_query($koneksi, "select username, nama from tb_konsumen where username='$username' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    $_SESSION['nama'] = $user['nama'];
    header("location:../index.php");
}else{
    header("location:../login_daftar.php");
}
?>