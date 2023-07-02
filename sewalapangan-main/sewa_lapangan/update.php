<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM penyewa WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($id);
// if(isset($_POST['submit'])){
// 	if(ubah($_POST) > 0){
// 		echo "<script>
// 				alert('Data berhasil dirubah');
// 				document.location.href = '?x=adterpesan';
// 				</script>";
// 			} else {
// 				echo "<script>
// 				alert('Data gagal dirubah');
// 				document.location.href = '?x=update';
// 				</script>";
// 			}
// }
	



// $result = mysqli_query($conn, "SELECT * FROM penyewa WHERE id = '$id'");
// $data = mysqli_fetch_array($result);
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
	  <form action="?x=edit" method="post">
	    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	    <label for="nama">Nama</label>
	    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>">

	    <label for="nomor">No Hp</label>
	    <input type="text" id="nomor" name="nomor" value="<?php echo $data['nomor'] ?>">

	    <label for="namatim">Nama Tim</label>
	    <input type="text" id="namatim" name="namatim" value="<?php echo $data['namatim'] ?>">

	    <label for="tanggal">Tanggal</label>
	    <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tanggal'] ?>">

	    <label for="jam">Jam</label>
	    <input type="time" id="jam" name="jam" value="<?php echo $data['jam'] ?>">

	    <label for="durasi">Durasi</label><br>
	    <input type="number" id="durasi" name="durasi" value="<?php echo $data['durasi'] ?>">

	    <button type="submit" name="submit">Submit</button>
	  </form>
</div>
</body>
</html>