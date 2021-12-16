<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Login</title>
</head>
<body>
    <h6>
        <?php 
            include 'koneksi.php';
        ?>
    </h6>
    <!-- Login -->
    <div class="container col-xxl-4">
        <div class="row-xxl-4">
            <div class="col-xxl-4">
                <form action="loginMultiProses.php" method="post">
                    <div class="row">
                        <div class="col">
                            <h1 class="header text-center">Login</h1>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>Username:</label>
                        <input class="form-control" type="text" name="username" placeholder="masukkan username">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input class="form-control" type="password" name="password" placeholder="masukkan password">
                    </div>

                    <input class="btn btn-success" id="button" type="submit" name="login" value="Submit">
                    <input class="btn btn-danger" id="button" type="reset" name="reset" value="Reset">
                    <?php
                    echo "Belum punya akun? silahkan ";?>
                    <a href="tambahAkun.html"> Daftar !</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Login-->
    <!-- Footer -->

    <footer class="text-white text-center fixed-bottom">
        <p><b>©Copyright Informatics 2021</b></p>
    </footer>
</body>
</html>