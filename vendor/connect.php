<?php 
	$connect = mysqli_connect('localhost', 'root', '', 'test-register');

	if (!$connect) {
		die('Error connect to DataBase');
	}
?>