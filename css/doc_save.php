<?php

	if($_POST){

	$user=$_POST["username"];
	$pass=$_POST["password"];
  $first=$_POST['first_name'];
  $last=$_POST['last_name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
	$image=$_FILES['image']['name'];

include('lib.php');

	$query="INSERT INTO `doctor` (`username`,`password`,`image`,`first_name`,`last_name`,`email`,`gender`) VALUES ('$user','$pass','$image','$first','$last','$email','$gender')";


	$data=mysqli_query($conn,$query);

	if($data) {
		echo "One Row Inserted";
		move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$image);
	}
	else
	{
		echo mysqli_error($conn);
	}


}
	?>
