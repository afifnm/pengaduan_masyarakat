<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
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
                        <h6 class="mb-4">My Profile</h6>
                <form action="auth_model.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="nik" class="form-control" value="<?= $_SESSION['nik'] ?>" readonly>
                    <label>NIK</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" value="<?= $_SESSION['nama'] ?>">
                    <label>Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" value="<?= $_SESSION['username'] ?>">
                    <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="telp" class="form-control" value="<?= $_SESSION['telp'] ?>">
                    <label>Telp</label>
                </div>
                <button name="update_profil" type="submit" class="btn btn-primary py-3 w-100 mb-4">Update Profil</button>
                </form>
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