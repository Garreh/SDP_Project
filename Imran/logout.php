<?php
// to delete the session.
	session_start();

	echo "<script>alert('Goodbye,".$_SESSION['student'].", See you soon! !!');</script>";

	session_destroy();

	echo "<script>window.location.href='hometest.php';</script>";

?>