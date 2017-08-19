<?php   
require("class.phpmailer.php");//调用   
$mail = new PHPMailer();//实例化phpmailer   
$address = "contact@aireseau.com";//接收邮件的邮箱   
$mail->IsSMTP(); // 设置发送邮件的协议：SMTP   
$mail->Host = "smtp.163.com"; // 发送邮件的服务器   
$mail->SMTPAuth = true; // 打开SMTP   
$mail->Username = "我的账户"; // SMTP账户   
$mail->Password = "我的密码"; // SMTP密码   
$mail->From = "mailxi@163.com";   
$mail->FromName = "peng";   
$mail->AddAddress("$address", "");   
//$mail->AddAddress(""); // name is optional   
//$mail->AddReplyTo("", "");   
//$mail->WordWrap = 50; // set word wrap to 50 characters   
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // add attachments   
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // optional name   
//$mail->IsHTML(true); // set email format to HTML   
$mail->CharSet = "UTF-8";//设置字符集编码   
$mail->Subject = "Sinopf的测试邮件";   
$mail->Body = "Hello,Sinopf的测试邮件";//邮件内容（可以是HTML邮件）   
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";   
if(!$mail->Send())   
{   
echo "Message could not be sent. < p>";   
echo "Mailer Error: " . $mail->ErrorInfo;   
exit;   
}   
echo "Message has been sent";//发送成功显示的信息   
