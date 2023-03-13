<?php
require_once('_koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
$nik = $_SESSION['nik'];
$query = "SELECT*FROM pengaduan where nik = '$nik' ";
$hasil = mysqli_query($conn,$query);
$no =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<?php require_once('layout/_css.php'); ?>
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
<?php require_once('layout/_sidebar.php'); ?>
<!-- Content Start -->
<div class="content">
    <?php require_once('layout/_navbar.php'); ?>
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">LaporanKu</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tgl. Pengaduan</th>
                            <th scope="col">Isi Laporan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
<tbody>
    <?php foreach ($hasil as $data) { ?>
    <tr>
        <th scope="row"><?= $no; ?></th>
        <td><?= $data['tgl_pengaduan']; ?></td>
        <td><?= $data['isi_laporan'] ?></td>
        <td><img src="foto/<?= $data['foto'] ?>" width=60></td>
        <td>
            <?php 
            if($data['status']==0){ echo"belum divalidasi";
            } else if($data['status']=='proses'){
                echo 'masih dlm proses';
            } else { echo 'selesai'; }
            ?>
        </td>
        <td>
            <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger" 
            href="masyarakat_model.php?hapus=<?= $data['foto']; ?> "> HAPUS</a>
        </td>
    </tr>
    <?php $no++; } ?>
</tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Blank End -->
    <?php require_once('layout/_footer.php'); ?>
</div>
<!-- Content End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<?php require_once('layout/_js.php'); ?>
</body>

</html>