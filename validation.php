<?php

session_start();



$hostname = "localhost";
$username = "userLogin";
$password = "11113566";


$conn = mysqli_connect($hostname, $username, $password);

if($conn)
{
	echo " Connection successful. ";
}
else
{
	echo " Connection failed! " ;
}

mysqli_select_db($conn, $username);

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from userlogin where name = '$name' && password='$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $name;

	header('location:home.php');

}
else
{
	header('location:login.php');
}





?>