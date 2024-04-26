<?php
require 'PHPMailer/PHPMailerAutoload.php';
function send_event_email($email,$start_time,$end_time,$message,$date){


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@milestone2k24.online';                 // SMTP username
$mail->Password = 'Mohitpatil@30501';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('admin@milestone2k24.online', 'VMS');
$mail->addAddress($email, 'test');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Body='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
        }
        p {
            color: #666666;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello,</h2>
        <p>We have scheduled an appointment for you. Here are the details:</p>
        <ul>
            <li><strong>'.$message.'</li>
            <li><strong>Scheduled Date:</strong> '. $date.'</li>
            <li><strong>Timing:</strong>'.$start_time.' to '.$end_time.' pm</li>
        </ul>
        <p>Thank you for using our Visitor Management System!</p>
    </div>
</body>
</html>
';
$mail->Subject = 'VMS';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
} else {
    echo 'Message has been sent';
    echo "<script>window.location='approved.php';</script>";
    return true;
}
}