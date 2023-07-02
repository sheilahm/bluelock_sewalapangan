<?php
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM penyewa");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="adterpesan-style.css">
	<title></title>
</head>
<body>
	<h2>Daftar Terpesan</h2>

<table>
  <tr>
  	<th>No</th>
    <th>Nama</th>
    <th>No Hp</th>
    <th>Nama Tim</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Durasi</th>
    <th>Aksi</th>
  </tr>
  <?php $i=1; ?>
  <?php while ($data=mysqli_fetch_assoc($result)) : ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $data["nama"] ?></td>
    <td><?php echo $data["nomor"] ?></td>
    <td><?php echo $data["namatim"] ?></td>
    <td><?php echo $data["tanggal"] ?></td>
    <td><?php echo $data["jam"] ?></td>
    <td><?php echo $data["durasi"] ?></td>
    <td><a href="?x=update&id=<?php echo $data["id"] ?>" class="update">Update</a> | <a href="hapus.php?id=<?php echo $data["id"] ?>" class="delete">Delete</a></td>
  </tr>
  <?php $i++ ?>
<?php endwhile; ?>
</table>
</body>
</html>