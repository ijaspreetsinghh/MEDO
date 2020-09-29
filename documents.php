<?php

session_start();
if ($_POST['upload']=='upload') {

	include 'lib.php';
		$patient_id=$_POST['patient_id'];
		$doctor_id=$_POST['doctor_id'];
		$lab_id=$_POST['lab_id'];
		$patient_age=$_POST['patient_age'];
		$dis_desc=$_POST['dis_desc'];
		$disease=$_POST['disease'];
		$desc=$_POST['desc'];
		$document_name=$_POST['doc_name'];
	  $document=$_FILES['doc']['name'];


		$query="INSERT INTO `documents` (`patient_id`,`desc`,`doc_name`,`doc`,`doctor_id`,`lab_id`,`patient_age`,`disease`,`dis_desc`)		VALUES ('$patient_id','$desc','$document_name','$document','$doctor_id','$lab_id','$patient_age','$disease','$dis_desc')";
		$data=mysqli_query($conn,$query);
		if($data) {
			echo "Dosument Uploaded successfully..";
			move_uploaded_file($_FILES['doc']['tmp_name'], "documents/".$document);
			header('location:profile.php#document');
		}
		else
		{
			echo mysqli_error($conn);
			//header('location:404.php');
		}
	}
	else {
		header('location:error.php');
	}
?>
