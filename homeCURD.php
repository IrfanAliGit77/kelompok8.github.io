<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Biodata</title>
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
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        th,td {
            text-align: left;
            padding: 16px;
        }

         tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
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
    <br>
    <div class="container-fluid">
        <h1 align="center">BIODATA MAHASISWA</h1><br>
        <table>
            <tr>
                <th> ID </th>
                <th> NIM </th>
                <th> Nama </th>
                <th> Kelas </th>
                <th> Absen </th>
                <th> Alamat </th>
                <th> Email </th>
                <th> Tanggal Lahir </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM biodata";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"] ?> </td>
                <td> <?php echo $row["nim"] ?> </td>
                <td> <?php echo $row["nama"] ?> </td>
                <td> <?php echo $row["kelas"] ?> </td>
                <td> <?php echo $row["absen"] ?> </td>
                <td> <?php echo $row["alamat"] ?> </td>
                <td> <?php echo $row["email"] ?> </td>
                <td> <?php echo $row["tanggalLahir"] ?> </td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id']; ?>"> Edit &nbsp; </a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>"> Hapus </a>
                </td>
                <?php
                        }
                    }
                    else{
                        echo "Masukkan Data Lebih Dahulu";
                    }
                ?>
            </tr>
        </table><br>
          <a href="insertForm.html" class="btn btn-success">Tambah Data</a>
          <a href="landingPage.php" class="btn btn-danger">Kembali Ke Menu Utama</a>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center fixed-bottom" style="background-color: #80bdad;">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
    </body>
</html>