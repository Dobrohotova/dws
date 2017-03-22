<?php 


if (isset($_POST['matichen']) && is_numeric($_POST['matichen']) && strlen($_POST['matichen']) > 13) {
		echo 'Uspeshno registriranje!';
	} else {
		echo 'Neuspeshno registriranje!';
	}










?>