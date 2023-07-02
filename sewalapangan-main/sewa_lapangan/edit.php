<?php
require 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST["nama"];
	$nomor = $_POST["nomor"];
	$namatim = $_POST["namatim"];
	$tanggal = $_POST["tanggal"];
	$jam = $_POST["jam"];
	$durasi = $_POST["durasi"];

	$query = "UPDATE penyewa set nama='$nama', nomor='$nomor', namatim='$namatim', tanggal='$tanggal', jam='$jam', durasi='$durasi' WHERE id='$id'";
	$update = mysqli_query($conn, $query);
	if($update){
		echo "<script>
				alert('Data berhasil dirubah');
				document.location.href = '?x=adterpesan';
				</script>";
	} else {
		echo "<script>
				alert('Data gagal dirubah');
				document.location.href = '?x=update';
				</script>";
	}
?>