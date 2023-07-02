<?php
session_start();

if(isset($_SESSION['login'])){
	session_destroy();
	echo "<script>alert('Berhasil logout')
			</script>";
	header('Location: index.php');
}
?>