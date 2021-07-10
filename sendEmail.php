<?php 

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpMailer/Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try
    {
        $mail->isSMTP();
        $mail->Host = 'smtp.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nathanleduc@hotmail.fr';
        $mail->Password = 'secret';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('nathanleduc@hotmail.fr');
        $mail->addAddress('nathanleduc@hotmail.fr');

        $mail->isHTML(true);
        $mail->Subject = 'Message Reçu (Portfolio)';
        $mail->body = '<h2>Nom : $name</h2> <br> <h2>Email : $email</h2> <br> <h2>Message : $message</h2>';
        $mail->send();

        $aler = '<div>
                    <span>Votre message a bien était envoyé ! Je vous répondrais sous peu</span>
                </div>';
    } catch(Exception $e)
    {
        $alert = '<div>
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}