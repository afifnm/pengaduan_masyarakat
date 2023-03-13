<?php
session_start();
require_once('_koneksi.php');
if(isset($_POST['simpan_pengaduan'])){
    $namafile = date('YmdHis').'.jpg';
    $namalama = $_FILES['foto']['tmp_name'];
    $folder_upload = "foto/";
    move_uploaded_file($namalama,$folder_upload.$namafile);
    $tanggal = date('Y-m-d');
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $query = "INSERT INTO pengaduan values(
        '',
        '$tanggal',
        '$nik',
        '$isi_laporan',
        '$namafile',
        '0'
    )";
    mysqli_query($conn,$query);
    echo "<script> alert('Laporan berhasil masuk'); </script>";
    echo "<script> window.location.href = 'pengaduan_lihat.php' </script>";
}
if(isset($_GET['hapus'])){
    $foto = $_GET['hapus'];
    unlink('foto/'.$foto);
    $query = "DELETE FROM pengaduan where foto = '$foto' ";
    mysqli_query($conn,$query);
    echo "<script> alert('Laporan berhasil dihapus'); </script>";
    echo "<script> window.location.href = 'pengaduan_lihat.php' </script>";
}