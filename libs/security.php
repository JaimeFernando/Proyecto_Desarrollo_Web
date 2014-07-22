<?php 
<<<<<<< HEAD

		session_start();

		if( !isset($_SESSION['user']) )
		header('Location: ../site/login.php');

=======
 	session_start();
	if( !isset($_SESSION['user']) )
		header('Location: ../site/login.php');
>>>>>>> ab4f2823555aa8666b6a0fb3a77a9c9a72dc0ad1
?>
