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
                Selamat datang, <?php echo $_SESSION['nama']; ?>
                Anda login sebagai <?php echo $_SESSION['level']; ?>
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