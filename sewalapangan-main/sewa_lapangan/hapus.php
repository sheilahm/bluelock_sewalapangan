<?php
require 'koneksi.php';
// function hapus($id){
// 	global $conn;
// 	mysqli_query($conn, "DELETE FROM penyewa WHERE id = '$id'");

// 	return mysqli_affected_rows($conn);
// }


if(isset($_GET['id'])){
	mysqli_query($conn, "DELETE FROM penyewa WHERE id = '$_GET[id]'");
	echo "<script>
			alert('Data berhasil dihapus');
			document.location.href = 'index.php?x=adterpesan';
		</script>";
}


?>