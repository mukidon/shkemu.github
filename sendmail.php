<?php
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");
$name=$_POST['name'];
$message=$_POST['comment'];;
$email=$_POST['email'];
$sent=email($message,$name,$email);
if($sent)
header('Location:http://shkemu.gq');
else
header('Location:http://shkemu.gq/contact.html');
function email($message,$name,$email){
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->CharSet="UTF-8";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'shkemub@gmail.com';
	$mail->Password = 'Shkemu@1999';
	$mail->SetFrom('shkemub@gmail.com');
	$mail->Subject = 'MFW(Mail From Website)';
	$mail->Body = "NAME:".$name."<br> MAIL: ".$email."<br>MESSAGE:".$message;
	$mail->AddAddress('www.muki1999@gmail.com');
	
	if($mail->send())
		return true;
	else
		return false;
}

?>
