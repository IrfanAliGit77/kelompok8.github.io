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

	$sql = "CREATE TABLE user(
			id INT(11) PRIMARY KEY,
			username VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL,
			level VARCHAR(5) NOT NULL)";
	if (mysqli_query($connect, $sql)) {
		echo "Tabel User berhasil dibuat";
	}
	else{
		echo "Tabel User gagal dibuat <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>