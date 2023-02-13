<?php 
require_once('_koneksi.php');
//Sintak input_siswa
if (isset($_POST['register'])) {
	$nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $query = "INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')";
	mysqli_query($conn, $query);
	//$conn untuk menyambungkan ke database
	//$query untuk menjalankan perintah query SQL
	header("Location: login.php"); 
	//setelah menyimpan dialihkan ke halaman tabel siswa
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);    
    $query = "SELECT*FROM masyarakat where username='$username' ";
	$hasil = mysqli_query($conn, $query);
    $masyarakat = mysqli_fetch_array($hasil);
    if($password==$masyarakat['password']){
        session_start();
        $_SESSION['nik'] = $masyarakat['nik'];
        $_SESSION['username'] = $masyarakat['username'];
        $_SESSION['nama'] = $masyarakat['nama'];
        $_SESSION['telp'] = $masyarakat['telp'];
        $_SESSION['level'] = "Rakyat";
        header("Location: index.php"); 
    } else {
        header("Location: login.php"); 
    }
}
if(isset($_POST['update_profil'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    $query = "UPDATE masyarakat SET
        nama = '$nama',
        username = '$username',
        telp = '$telp'
        WHERE nik = '$nik'
        ";
	$hasil = mysqli_query($conn, $query);
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    $_SESSION['telp'] = $telp;
    header("Location: profil.php"); 

}