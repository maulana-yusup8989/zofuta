<!DOCTYPE html>
<html lang="en">
<?php include 'includes/session.php'; ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Zofuta | Login</title>
    <!-- Custom fonts for this template-->
    <link href="../../node_modules/bootstrap/css/all.min.css" rel=stylesheet" type="text/css">
    <link href="../../node_modules/bootstrap/css/all.min.css" rel=stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../node_modules/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['error'])) {
                                        echo "<div class='callout callout-danger text-center'><p>" . $_SESSION['error'] . "</p> </div>";
                                        unset($_SESSION['error']);
                                    }
                                    if (isset($_SESSION['success'])) {
                                        echo "<div class='callout callout-success text-center'><p>" . $_SESSION['success'] . "</p> </div>";
                                        unset($_SESSION['success']);
                                    }
                                    ?>
                                    <form action="verify.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukan kata sandi">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <button class="btn btn-success btn-user btn-block" type="submit" name="login">
                                            Login
                                        </button>
                                        <hr>

                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Daftar Akun!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../node_modules/bootstrap/js/jquery.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../node_modules/bootstrap/js/jquery.easing.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../node_modules/bootstrap/js/sb-admin-2.min.js"></script>
</body>

</html>