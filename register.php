<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<body background="assets/login.webp">
    </head>

    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            Register Perpustakaan Digital</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                    if (isset($_POST['register'])) {
                                        $nama = $_POST['nama'];
                                        $username = $_POST['username'];
                                        $password = md5($_POST['password']);
                                        $email = $_POST['email'];
                                        $alamat = $_POST['alamat'];
                                        $no_telpon = $_POST['no_telpon'];
                                        $level = $_POST['level'];

                                        $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,no_telpon,alamat,level)
                                        VALUES('$nama','$username','$password','$email','$alamat','$no_telpon','$level')");

                                        if ($insert) {
                                            echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                        } else {

                                            echo '<script>alert("Register gagal, Silahkan Login Kembali.");</script>';
                                        }
                                    }
                                    ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="nama"
                                                    placeholder="Masukan Nama Lengkap" />
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="email"
                                                    placeholder="Masukan Nama Lengkap" />
                                                <label>Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="no_telpon"
                                                    placeholder="Masukan no.telpon" />
                                                <label>No.Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" type="text" required name="alamat"
                                                    rows="5" placeholder=""></textarea>
                                                <label>Alamat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="username" required name="username"
                                                    placeholder="Masukan Username" />
                                                <label>Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" required name="password"
                                                    type="password" placeholder="Masukan Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-group">
                                            <label class="small mb-1">Level</label>
                                                <select name="level" requaired class="from-select">
                                                    <option value="peminjam">Peminjam</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="petugas">Petugas</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center judtify-content-between mt-4 mb-4">
                                                <button class="btn btn-primary" type="submit" name="register"
                                                    value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous">
        </script>
        <script src="js/scripts.js"></script>
    </body>

</html>