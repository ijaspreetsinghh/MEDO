<?php

if ($_POST['reg']=='submit') {
	include 'lib.php';
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM `table` WHERE `username`='$user'";
	$data=mysqli_query($conn,$query);
 	$num_rows=mysqli_num_rows($data);

	if($num_rows>0){
		echo "Username Already Exists...<br> TRY ANOTHER";
			}
	else {
		$query="INSERT INTO `table` (`username`,`password`) VALUES ('$user','$pass')";

		$data=mysqli_query($conn,$query);
		echo "Registeration Successful, Please login to access";
	}
}
else {
	header('location:register.php');
}


?>
