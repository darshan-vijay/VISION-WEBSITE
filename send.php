<?php
    require_once('C:/xampp/htdocs/PHPMailer/PHPMailer.php');
    require_once('C:/xampp/htdocs/PHPMailer/SMTP.php');
    require_once('C:/xampp/htdocs/PHPMailer/Exception.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer();

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'vision21.ceg@gmail.com';                  // SMTP username fill this
        $mail->Password   = 'vision21@';                    // SMTP password fill this
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         	// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('vision21.ceg@gmail.com', 'vision2k21');						//fill this
        $mail->addAddress($email, 'Participant');    		            // Add a recipient fill this

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;	//fill this
        $mail->Body    = $body;	//fill this
        $mail->AltBody = $altbody;	//fill this

        $mail->send();
        
    if($mail->send()){

    }
    else
       
    {
        echo "F";
        
    }
}   
    

    catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo "Message could not be sent";
    }

?>