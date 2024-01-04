<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 
require '../inc/config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];  

    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $invalidEmail = 'Please enter a valid email address';
    }

    if (!$_POST['name']) {
        $emptyMessage = 'Please enter your message';
    }

    if (!$errName && !$invalidEmail && !$emptyMessage ) {
        $text = "Hi<br /><br />"; 
        $text .= "Sender information:<br /><br />";
        $text .= "<b>Full name:</b>" . $name. "<br />";
        $text .= "<b>Email:</b>" . $email . "<br />";
        $text .= "<b>Message: </b>" . htmlspecialchars($message) . "<br />"; 
        $text .="<br /><br />";
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();  
            $mail->Host       = $smtp_host;  
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtp_username;
            $mail->Password   = $smtp_password; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $smtp_port; 
    
            $mail->setFrom('incidence@ksoft-solutions.com', 'Portfolio');
            $mail->addAddress($to, 'Nice Tech');   

            //Content
            $mail->isHTML(true);  
            $mail->Subject = htmlspecialchars('Portfolio - A new message from your portfolio');
            $mail->Body    = $text; 

            $mail->send();

            // $_SESSION["index_output_message"] = $output;
            // header("Location: index.php");
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } 
    }
}

 
?>