<?php
	include('auth.php');
?>

<h1>Welcome to Home Page</h1>
Hello || <?php echo $_SESSION['email']; ?> ||
 <a href="logout.php">Logout </a>