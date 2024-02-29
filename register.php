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
        <title>Register | Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-white">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['register'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                            $email   = $_POST['email'];
                                            $namalengkap = $_POST['namalengkap'];
                                            $alamat= $_POST['alamat'];
                                            $level = $_POST['level'];
                                           
                                            $insert = mysqli_query($koneksi, "INSERT INTO user(username,password,email,namalengkap,alamat,level) VALUES('$username', '$password', '$email', '$namalengkap', '$alamat', '$level')");
                                           if ($insert) {
                                           echo '<script>alert("Selamat, Register Berhasil!!, Silahkan Login"); location.href="login.php"</script>';
                                        }  else {
                                            '<script>alert("Registrasi Gagal!!, Silahkan Coba Lagi");</script>';
                                        }
                                        
                                        
                                        
                                        }

                                        ?>
                                        <form method="post">
                                           <div class="form-group">
                                            <label class="small mb-2">Username</label>
                                            <input class="form-control py-2 mb-3" type="username" required name="username" placeholder="Masukkan Username"/>
                                           </div>
                                           <div class="form-group">
                                            <label class="small mb-2">Password</label>
                                            <input class="form-control py-2 mb-3" type="password" required name="password" placeholder="Masukkan Password"/>
                                           </div>
                                           <div class="form-group">
                                            <label class="small mb-2">Email</label>
                                            <input class="form-control py-2 mb-3" type="text" required name="email" placeholder="Masukkan Username"/>
                                           </div>
                                           <div class="form-group">
                                            <label class="small mb-2">Nama Lengkap</label>
                                            <input class="form-control py-2 mb-3" type="text" required name="namalengkap" placeholder="Masukkan Username"/>
                                           </div>
                                           <div class="form-group">
                                            <label class="small mb-2">Alamat</label>
                                            <textarea name="alamat" rows="2" required class="form-control py-2 mb-3"></textarea>
                                           </div>
                                           <div class="form-group">
                                            <label class="small mb-2">Level</label>
                                            <select required name="level" class="form-select py-2 mb-3">
                                                <option value="administrator">Administrator</option>
                                                <option value="peminjam">Peminjam</option>
                                            </select>
                                           </div>

                                            <div class="d-grid mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="register" value="register" href="login.html">Submit</button>
                                            </div>
                                            <div class="d-grid mt-4 mb-0">
                                            <a class="btn btn-danger" href="login.php">Kembali</a>
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

