<?php 

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



require_once './phpMailer/Exception.php';
require_once './phpMailer/PHPMailer.php';
require_once './phpMailer/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try
    {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Host = 'host';
        $mail->Username = 'user';
        $mail->Password = 'Secret';

        $mail->setFrom('email');
        $mail->addAddress('email');

        $mail->isHTML(true);
        $mail->Subject = 'Message de (Portfolio) '. $name;
        $mail->Body = '<h2>Nom :'. $name. '</h2> <br> <h2>Email :'. $email. '</h2> <br> <h2>Objet :'. $subject. '</h2> <br> <h2>Message :'. $message.'</h2>';
        $mail->send();

        $alert = '<div class="modal-email">
                    <span>Votre message a bien été envoyé ! </span>
                </div>';
    } catch(Exception $e)
    {
        $alert = '<div>
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}
