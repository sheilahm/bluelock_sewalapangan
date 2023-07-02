<?php

require 'koneksi.php';

	if (isset($_POST["submit"])){
		
		$nama = $_POST["nama"];
		$nomor = $_POST["nomor"];
		$namatim = $_POST["namatim"];
		$tanggal = $_POST["tanggal"];
		$jam = $_POST["jam"];
		$durasi = $_POST["durasi"];

		$query = "INSERT INTO penyewa VALUES ('', '$nama', '$nomor', '$namatim', '$tanggal', '$jam', '$durasi')";

		mysqli_query($conn, $query);

		if(mysqli_affected_rows($conn)){
			echo "<script> 
				alert('Data berhasil ditambahkan!');
				document.location.href = '?x=terpesan';
			</script>";
		} else { 
			echo "<script> 
				alert('Data gagal ditambahkan!');
			</script>";

		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="booking-style.css">
	<title></title>
</head>
<body>
	<div class="container">
	  <form action="" method="post">
	    <label for="nama">Nama</label>
	    <input type="text" id="nama" name="nama" placeholder="Nama...">

	    <label for="nomor">No Hp</label>
	    <input type="text" id="nomor" name="nomor" placeholder="Nomor Hp...">

	    <label for="namatim">Nama Tim</label>
	    <input type="text" id="namatim" name="namatim" placeholder="Nama Tim...">

	    <label for="tanggal">Tanggal</label>
	    <input type="date" id="tanggal" name="tanggal" placeholder="Booking Tanggal...">

	    <label for="jam">Jam</label>
	    <input type="time" id="jam" name="jam" placeholder="Booking Jam...">

	    <label for="durasi">Durasi</label><br>
	    <input type="number" id="durasi" name="durasi" placeholder="Untuk Berapa Jam? Maks 3 jam" min="1" max="3">

	    <button type="submit" name="submit">Submit</button>
	  </form>
</div>
</body>
</html>