<?php
$username='biminh0369@gmail.com';
$password='iusdhlvsauslkeca';

//Khai báo thư viện PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function SendEmailActiveRegister($email){
     //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
global $username;
global $password;

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure   = 'ssl';                                    //Enable SMTP authentication
    $mail->Username   = $username;                              //Địa chỉ Email gửi thư
    $mail->Password   = $password;                               //Mật khẩu của địa chỉ đó
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Gymmax@support.com', 'Service-Noreply');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('mail.xlsx');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[Gymmax] Kích hoạt tài khoản';
    $mail->Body    = 'Nhấn đường dẫn sau để kích hoạt tài khoản <a href="http://nhuthinh0258.live/neweb/giaodien.php">Click here</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        return true;
    }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
 }
?>