<?php
include ('lib.php');
if (isset($_GET['id'])) {
$id=$_GET['id'];
$query="DELETE FROM `documents` WHERE `doc_id`='$id'";
$data=mysqli_query($conn,$query);
if($data){
	header('location:profile.php');
}
}
else {
	header('location:error.php');
}
?>
