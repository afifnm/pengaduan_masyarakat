<?php 
require_once('_koneksi.php');
//Sintak input_siswa
if (isset($_POST['simpan'])) {
	$nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $alamat = $_POST['alamat'];
    $password = md5($_POST['password']);
    $query = "INSERT INTO siswa VALUES('','$nis','$nama','$jenis_kelamin','$kelas','$tahun_masuk','$password','$alamat')";
	mysqli_query($conn, $query);
	//$conn untuk menyambungkan ke database
	//$query untuk menjalankan perintah query SQL
	header("Location: index.php"); 
	//setelah menyimpan dialihkan ke halaman tabel siswa
}
if (isset($_POST['login'])) {
    $nis = $_POST['nis'];
    $password = md5($_POST['password']);    
    $query = "SELECT*FROM siswa where nis='$nis' ";
	$hasil = mysqli_query($conn, $query);
    $siswa = mysqli_fetch_array($hasil);
    if($password==$siswa['password']){
        session_start();
        $_SESSION['nis'] = $siswa['nis'];
        $_SESSION['jenis_kelamin'] = $siswa['jenis_kelamin'];
        $_SESSION['nama'] = $siswa['nama'];
        $_SESSION['kelas'] = $siswa['kelas'];
        $_SESSION['tahun_masuk'] = $siswa['tahun_masuk'];
        $_SESSION['alamat'] = $siswa['alamat'];
        header("Location: index.php"); 
    } else {
        header("Location: login.php"); 
    }
}
?>