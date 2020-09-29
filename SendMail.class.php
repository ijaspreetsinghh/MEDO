<?php
if($_POST){

include('../lib.php');
		include 'PHPMailer.class.php';

                  $to=$_POST['email'];

		$query="SELECT * FROM `student_record` WHERE `email`='$to'";		         $data=mysqli_query($con,$query);
		  $num_rows=mysqli_num_rows($data);

		 if($num_rows>0){

		  $pass=rand(10000,99999);

		$body="  Hello,<br>

				 <p>Your new password is </p><br>
		         Email:".$to."<br>
                 Password:".$pass."



		";


			$from = "demophpcdac@gmail.com";
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->set('X-MSMail-Priority', 'Normal');
			$mail->addCustomHeader("X-Priority: 3");
			$mail->SMTPAuth = true;  // SMTP authentication
			$mail->IsHTML(true);
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->Username = "demophpcdac@gmail.com";
			$mail->Password = "";
			$mail->SetFrom($from, 'Prabal Garg');
			$mail->Subject = 'Your new password';
			$mail->MsgHTML($body);
			$address = $to;
			$mail->AddAddress($address, $to);
			$mail->AddReplyTo('demophpcdac@gmail.com', 'Prabal Garg');

			if (!$mail->Send())
			{
			  echo  "Oops! Something went wrong. Please try again";
			 }
			else
			   {

			   echo "Your new password has been sent to your email.";
			   $query="UPDATE  `student_record` SET `password`='$pass' WHERE                 `email`='$to'";
			    $data=mysqli_query($con,$query);


			   }

		 }
		 else{


			 echo "Email id is not reg.";



			 }












}
else{

	header('location:error.php');


	}
?>
