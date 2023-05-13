<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Gudang Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">


    <div class="error" data-err="<?= session('error') ?>"></div>
    <div class="login-box">

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in</p>

                <form method="POST" action="login">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control  <?= isset($_SESSION['_ci_validation_errors']) ? isset($_SESSION['_ci_validation_errors']['username']) ? "is-invalid" : "" : ""; ?>" placeholder="Please Insert You Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Please Insert Your Username
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= isset($_SESSION['_ci_validation_errors']) ? isset($_SESSION['_ci_validation_errors']['password']) ? "is-invalid" : "" : ""; ?>" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Please Insert Your Password
                        </div>
                    </div>

            </div>
            <div class="row  m-3">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.all.js"></script>
    <!-- sweet alert -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/dist/js/login.js"></script>

</body>

</html>