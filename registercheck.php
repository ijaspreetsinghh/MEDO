<?php
if ($_POST['reg']=='submit') {
	include 'lib.php';
	$user=$_POST['user'];
	$pass=$_POST['password'];
	$query="SELECT * FROM `table` WHERE `username`='$user'";
	$data=mysqli_query($conn,$query);
 	$num_rows=mysqli_num_rows($data);
	if($num_rows>0){ 		$conflict = "Username Already Exists... TRY ANOTHER";
	header('location:error.php?conflict='.$conflict);	}

	else {		$user=$_POST['user'];
		$pass=$_POST['password'];
	  $first=$_POST['first_name'];
	  $last=$_POST['last_name'];
	  $email=$_POST['email'];
	  $gender=$_POST['gender'];
	  $user_type=$_POST['user_type'];
		$contact_no=$_POST['contact'];
		$image=$_FILES['image']['name'];
	include('lib.php');
		$query="INSERT INTO `table` (`username`,`password`,`image`,`first_name`,`last_name`,`email`,`gender`,`user_type`,`contact_no`)
			VALUES ('$user','$pass','$image','$first','$last','$email','$gender','$user_type','$contact_no')";
		$data=mysqli_query($conn,$query);
		if($data) {
			echo "Registeration successfull..";
			move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$image);
			header('location:login.php', true, 303);
		}
		else
		{			echo mysqli_error($conn);
			header('location:error.php');		}
	}
}
else {
	header('location:register.php');
}
?>
