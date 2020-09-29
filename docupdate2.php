<?php
include ('lib.php');
if ($_POST['update']=='submit') {

$id=$_POST['id'];
$patient_id=$_POST['patient_id'];
$doctor_id=$_POST['doctor_id'];
$lab_id=$_POST['lab_id'];
$patient_age=$_POST['patient_age'];
$dis_desc=$_POST['dis_desc'];
$disease=$_POST['disease'];
$desc=$_POST['desc'];
$document_name=$_POST['doc_name'];
$query="UPDATE `documents` SET `patient_id`='$patient_id',`doctor_id`='$doctor_id',`lab_id`='$lab_id', `patient_age`='$patient_age', `dis_desc`='$dis_desc', `disease`='$disease', `desc`='$desc', `document_name`='$doc_name' WHERE `doc_id`='$id'";
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
