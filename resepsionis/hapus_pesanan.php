<?php
include '../koneksi.php';
$id_pesanan = $_GET["id_pesanan"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
$query = "DELETE FROM pesanan WHERE id_pesanan ='$id_pesanan' ";
$hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
if(!$hasil_query) {
  die ("Gagal menghapus data: ".mysqli_errno($koneksi).
   " - ".mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='pesanan.php';</script>";
}