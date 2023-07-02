<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="index-style.css">
    <!-- <link rel="stylesheet" type="text/css" href="card-style.css"> -->
	<title>Blue Lock Arena</title>
</head>
<body>
	<nav>
        <h2 class="logo">Selamat Datang</h2>
        <ul>
          <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="row">
	    <div class="kolom sidebar">
	        <h2>BLUELOCK ARENA</h2>
	        <a href="?x=index">HOME</a>
	        <a href="?x=booking">BOOKING</a>
	        <a href="?x=terpesan">TERPESAN</a>
	        <a href="?x=about">TENTANG KAMI</a>
	        <a href="?x=admin">ADMIN</a>
	    </div>
	    <div class="kolom konten">
	      	<?php include("kontrol.php"); ?>
	    </div>
	</div>
</body>
</html>