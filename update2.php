<?php
include ('lib.php');
if ($_POST['update']=='submit') {

$id=$_POST['id'];
$first_name=$_POST['new_first_name'];
$last_name=$_POST['new_last_name'];
$password=$_POST['new_password'];
$contact_no=$_POST['new_contact'];
$query="UPDATE `table` SET `first_name`='$first_name',`last_name`='$last_name',`password`='$password', `contact_no`='$contact_no' WHERE `user_id`='$id'";
	//header('Location:profile.php');
$data=mysqli_query($conn,$query);
if ($data) {
	echo "Data Updated";
	header('Location:profile.php');

}

}
else {
	$access="Invalid method to access page";
	header('location:error.php?conflict='.$access);
}

echo mysqli_error($conn);
?>
