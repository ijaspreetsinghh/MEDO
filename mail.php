<?php
    include('lib.php');
if ($_POST['sendmail']=='send') {

	include('PHPMailer.class.php');
$name_user= $_POST['name_user'];

	$to=$_POST['mail'];
$body = $_POST['msg'];

			$from = $_POST['user_mail'];
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
			$mail->Password = "demophpcdac@123";
			$mail->SetFrom($from, $_POST['name_user']);
			$mail->Subject = $_POST['subject'];
			$mail->MsgHTML($body);
			$address = $to;
			$mail->AddAddress($address, $to);
			//$mail->AddReplyTo('demophpcdac@gmail.com', 'Prabal Garg');

			if (!$mail->Send())
			{
			  echo  "Oops! Something went wrong. Please try again";
			  die;
			 }
			else
			   {
			   echo "Your meggase has been sent to your email.";
         die;
			  }
      }
      else {
        header('location:error.php');
      }
?>
