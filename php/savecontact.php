<?php
	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['message']) && !empty($_POST['message'])){
		$to = "theamalinaaziz@gmail.com";
		$subject = "amalinaaziz.ml: A new contact form submitted!";
		$msg = "Greetings <strong style='color:#1072BA;'>Amalina</strong>, <br><br><br>A new contact form submitted. <br><br>Name <strong>".$_POST['name']."</strong> <br>Email: ".$_POST['email']."<br>Message: ".$_POST['message']."<br><br><br>Best Regards,<br>amalinaaziz.ml<br><br>";

		ini_set( 'sendmail_from', "no-reply@amalinaaziz.ml" );
		ini_set( 'SMTP', "amalinaaziz.ml" ); 
		ini_set( 'smtp_port', 25 );
		
		$message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>";
		$message = $message . "<html xmlns='http://www.w3.org/1999/xhtml'>";
		$message = $message . "<head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
		$message = $message . "<title>U2DR Mail</title>";
		$message = $message . "<meta name='viewport' content='width=device-width, initial-scale=1.0'/></head>";
		$message = $message . "	<body style='font-family:verdana;padding:0;margin:0;'>";
		$message = $message . "		<center>";
		$message = $message . "			<div style='width:500px;padding:20px;border:solid 1px #eee;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
		$message = $message . "				<table cellpadding='5' width='100%'";
		$message = $message . "					<tr>";
		$message = $message . "						<td style='font-size:13px;font-family:verdana;' align='left'>";
		$message = $message . $msg;
		$message = $message . "						</td>";
		$message = $message . "					</tr>";
		$message = $message . "				</table>";
		$message = $message . "			</div>";
		$message = $message . "		</center>";
		$message = $message . "	</body>";
		$message = $message . "</html>";
			
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: amalinaaziz.ml' . "\r\n";

		mail($to,$subject,$message,$headers);
		echo "success";
	}else{
	    echo "error";
	}
?>