<?php
session_start();
if ($_POST['login']=='Login') {
	include 'lib.php';
	$user=$_POST['user'];
	$pass=$_POST['password'];

	$query="SELECT * FROM `table` WHERE `username`='$user' AND `password`='$pass'";
	$data=mysqli_query($conn,$query);
 	$num_rows=mysqli_num_rows($data);
$row=mysqli_fetch_array($data);

	if($num_rows>0){
			$_SESSION['user']=$user;
			$_SESSION['password']=$row['password'];
			$_SESSION['id']=$row['user_id'];
			$_SESSION['first']=$row['first_name'];
			$_SESSION['last']=$row['last_name'];
			$_SESSION['user_type']=$row['user_type'];
			$_SESSION['email']=$row['email'];
			$_SESSION['image']=$row['image'];
			$_SESSION['contact']=$row['contact_no'];
			if (!empty($_POST['logincheck'])){
				setcookie('user',$user,time()+20);
				setcookie('pass',$pass,time()+20);
			}
			header('location:profile.php');
			}
	else {
		$st="Invalid Login Details, Try cheking 'Username' or 'Password'";
		header('location:error.php?conflict='.$st);
	}
}
else {
	header('location:login.php');
}


?>
