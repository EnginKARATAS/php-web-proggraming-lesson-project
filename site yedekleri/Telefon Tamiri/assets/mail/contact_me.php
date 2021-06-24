<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$baslik = "Yozgat Telefon Tamiri";

include '../class.phpmailer.php';
include '../class.smtp.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
//$mail->Host = 'smtp.gmail.com';
//$mail->Host = 'smtp.gmail.com';
$mail->Host = 'mail01.wafbone.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'info@yozgattelefontamiri.com';
$mail->Password = 'fwdn5743';
$mail->SetFrom($mail->Username, $baslik);
$mail->AddAddress('samet@yobu.edu.tr', 'Samet Ulutürk');
$mail->CharSet = 'UTF-8';
$mail->Subject = ''.$name.' - Contact';
$content = '<div style="background: #eee; padding: 10px; font-size: 14px">
İsim: '.$name.'<br>
Soyisim: '.$name.'<br>
Email: '.$email.'<br>
Telefon: '.$phone.'<br>
Mesaj: '.$message.'<br>
</div>';
$mail->MsgHTML($content);
if(!$mail->Send()) {
 http_response_code(500);
}
?>
