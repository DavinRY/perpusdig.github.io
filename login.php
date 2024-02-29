<?php
include "koneksi.php"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | Perpustakaan Digital</title>
        <style>


        </style>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-white">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center" style="text-align: center;">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['login'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);


                                            $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                                             $cek = mysqli_num_rows($data);
                                            if($cek > 0) {
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>location.href="index.php";</script>';
                                            } else{
                                                echo '<script>alert("Maaf, Username/Password anda salah!!"); location.href="index.php";</script>';
                                            }
                                        }

                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="username" placeholder="Masukkan Username" required name="username"/>
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" required name="password" />
                                                <label for="Masukkan Password">Password</label>
                                            </div>
                                            <p>Belum Punya Akun? <a href="register.php">Register</a></p>
                                            <div class="d-grid mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login" href="index.html">Login</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class ="small">
                                            &copy; Perpustakaan Digital | Davin Risanta Y.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
