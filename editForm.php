<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data</title>
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
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM biodata WHERE id='$id'";
		$result = mysqli_query($connect, $query);
	?>
	<table>
		<form method="get" action="prosesEdit.php">
			<?php 
				while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> ID </td>
				<td> <input type="number" name="id" value="<?php echo $row['id']; ?>"> </td>
			</tr>
			<tr>
				<td> NIM </td>
				<td> <input type="text" name="nim" value="<?php echo $row['nim']; ?>"> </td>
			</tr>
            <tr>
                <td> Nama </td>
                <td> <input type="text" name="name" value="<?php echo $row['nama']; ?>"> </td>
            </tr>
             <tr>
                <td> Kelas </td>
                <td> <input type="text" name="class" value="<?php echo $row['kelas']; ?>"> </td>
            </tr>
			<tr>
				<td> Absen </td>
				<td> <input type="number" name="absen" value="<?php echo $row['absen']; ?>"> </td>
			</tr>
             <tr>
                <td> Alamat </td>
                <td> <input type="text" name="address" value="<?php echo $row['alamat']; ?>"> </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> <input type="email" name="email" value="<?php echo $row['email']; ?>"> </td>
            </tr>
             <tr>
                <td> Tanggal Lahir </td>
                <td> <input type="date" name="tanggal" value="<?php echo $row['tanggalLahir']; ?>"> </td>
            </tr>
			<tr>
				<td> <input type="submit" name="edit" 
               class="btn btn-success" value="Edit Data"> </td>
			</tr>
			<?php
				}
			?>
		</form>
	</table>
 </div><br><br>

    <!-- Footer -->
    <footer class="text-white text-center fixed-bottom" style="background-color: #80bdad;">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>