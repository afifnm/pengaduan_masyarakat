<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <?php require_once('layout/_css.php'); ?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action="auth_model.php" method="post">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Pipapip</h3>
                                </a>
                                <h3>Log In</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <a href="register.php">klik disini untuk mendaftar!</a>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    <?php require_once('layout/_js.php'); ?>
</body>

</html>