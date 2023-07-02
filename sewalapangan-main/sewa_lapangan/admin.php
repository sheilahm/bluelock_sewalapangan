<?php
require 'koneksi.php';

session_start();
if(!isset($_SESSION['login'])){
	echo "<script>alert('Anda belum login sebagai admin!');
	document.location.href = 'login.php';
	</script>";
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="card-style.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="card1"> 
			<a href="?x=adbooking"><img src="booking.png"></a>
			<p><a href="?x=adbooking">Booking</a></p>
		</div>
		<div class="card2">
			<a href="?x=adterpesan"><img src="booked.png"></a>
			<p><a href="?x=adterpesan">Terpesan</a></p>
		</div>
	</div>
</body>
</html>