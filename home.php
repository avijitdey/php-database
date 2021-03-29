<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>

	<h2> Welcome To Homepage  </h2>
<br>
<br>



<h3> Welcome <?php echo $_SESSION['username'] ?> </h3>
<br>
<br>
	<a href="logout.php"> Logout</a>

</body>
</html>