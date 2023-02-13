<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once('layout/_css.php'); ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Suara Rakyat</h3>
                            </a>
                            <h3>Register</h3>
                        </div>
                        <form action="auth_model.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nik" required>
                                <label>NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" required>
                                <label>Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" required>
                                <label>Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" required>
                                <label>Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="telp" required>
                                <label>No. Telp</label>
                            </div>
                            <button name="register" type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
    <!-- JavaScript Libraries -->
    <?php require_once('layout/_js.php'); ?>
</body>

</html>