<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

<body>

</body>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Login ke perpustakaan digital</title>
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<body background="assets/login.webp">
    </head>

    <body class="bs-white">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login Perpustakaan Digital</h3>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class=" small "></div>
                                        <img src="assets/lg_perpus.jpg" width="30%">
                                    </div>
                                    <div class="card-body">
                                        <?php
                                    if (isset($_POST['login'])) {
                                        $username = $_POST['username'];
                                        $password = md5($_POST['password']);

                                        $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password' ORDER BY id_user");
                                        $cek = mysqli_num_rows($data);
                                        if ($cek > 0) {
                                            $_SESSION['user'] = mysqli_fetch_array($data);
                                            echo '<script>alert("Selamat Datang, Login Berhasil"); location.href="index.php"</script>';
                                        } else {
                                            echo '<script>alert("Maaf, Username/Password Salah")</script>';
                                        }
                                    }
                                    ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="username"
                                                    placeholder="Enter username " />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password"
                                                    name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword"
                                                    type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember
                                                    Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-danger" type="sumbit" name="login"
                                                    value="login">Login</button>
                                                <button class="btn btn-info"><a
                                                        href="register.php">register</a></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                </main>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>

    </body>

</html>