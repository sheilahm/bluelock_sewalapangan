<?php
	if (isset($_GET['x'])) {
		switch ($_GET['x']) {
			case 'booking':
				include('booking.php');
				break;
			case 'terpesan':
			include('terpesan.php');
				break;
			case 'about':
			include('about.php');
				break;
			case 'index':
			include('card.php');
				break;
			case 'admin':
			include('admin.php');
				break;
			case 'adterpesan':
			include('adterpesan.php');
				break;
			case 'adbooking':
			include('adbooking.php');
				break;
			case 'update':
			include('update.php');
				break;
			case 'edit':
			include('edit.php');
				break;
		}
		# code...
	} else {
		echo require('card.php');
	}
?>