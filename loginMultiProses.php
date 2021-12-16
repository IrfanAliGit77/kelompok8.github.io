<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        center {
            margin-top: 7rem;
        }

        center a {
            text-decoration: none;
        }

        center a input {
            font-size: 25px;
            height: 70px;
            width: 250px;
        }

        nav span {
            color: white;
            font-weight: bold;
        }
        .card-img-top{
            width: 50%;
            height: 50%;
            margin-left: 25%;
            margin-top: 10%;
        }
        .card-body{
            margin-left: 27%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-light " style="background-color: #80BD9E;">
        <div class="container-fluid">
            <span style="font-weight: bold;" class="navbar-brand mb-0 h1 text-light">Kelompok 8</span>
            <span id="tanggalwaktu"></span>
                <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                    else(a = tw.getTime());
                    tw.setTime(a);
                    var tahun = tw.getFullYear();
                    var hari = tw.getDay();
                    var bulan = tw.getMonth();
                    var tanggal = tw.getDate();
                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " | " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" WIB ");
                </script>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- isi -->
    <?php 
        include 'koneksi.php';

        $username = $_POST['username'];
        $password = MD5($_POST['password']);

        $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
        $cek = mysqli_num_rows($result);
        
        if($row['level'] > 0 && $cek > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';

            $panggil = ucwords("Hallo $username !");
            echo "<script type='text/javascript'>
            alert('$panggil');
                </script>";
            ?>
        <div class="container-fluid"><br>
            <div class="jumbotron">
                <h1 class="display-4">DESAIN DAN PEMROGAMAN WEB : TUGAS BESAR</h1>
                <p class="lead">NAMA KELOMPOK 8 :</p>
                <hr class="my-4">
                <ul class="lead">
                    <li>Daffa Aqila&emsp;&emsp;&nbsp;&nbsp;(2041720098 / 08)</li>
                     <li>Hafizh Izhar D.&emsp;(2041720078 / 12)</li>
                     <li>Muh. Irfan Ali&emsp;&nbsp; (2041720067 / 15)</li>
                </ul><br><br>
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="landingPage.php" role="button">Masuk Menu</a>
             </p>
        </div>
    </div>
            <?php
        }
        else{
            echo "Anda gagal login. silahkan "?>
            <a href="login.php">Login Kembali</a>
            <?php
            echo mysqli_error($connect);
        }
    ?><br><br><br>
    <!-- Akhir isi -->

    <!-- Footer -->
    <footer class="text-white text-center fixed-bottom" style="background-color: #80bdad;">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>