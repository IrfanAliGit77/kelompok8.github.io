<?php  
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "dbtubesweb";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	if ($connect) {
		echo "Koneksi ke MySQL berhasil <br>";
	}
	else{
		echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
	}

	$sql = "CREATE TABLE biodata(
			id INT(11) PRIMARY KEY,
			nim CHAR(12) NOT NULL,
			nama VARCHAR(60) NOT NULL,
			kelas CHAR(4) NOT NULL,
			absen INT(11) NOT NULL,
			alamat VARCHAR(60) NOT NULL,
			email VARCHAR(30) NOT NULL,
			tanggalLahir date NOT NULL)";
	if (mysqli_query($connect, $sql)) {
		echo "Tabel Biodata berhasil dibuat";
	}
	else{
		echo "Tabel Biodata gagal dibuat <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>