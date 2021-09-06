<?php
if (empty($_SESSION['email'] AND $_SESSION['password'])) {
	echo "<script> alert('Please Log In');
		</script>";

		header("location:customerforms.php");
}




?>