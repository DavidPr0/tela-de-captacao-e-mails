<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/01/2018
 * Time: 22:45
 */

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    private $mailer;

    public function __construct($host,$username,$senha,$name)
    {
        require_once("../Library/PHPMailer/vendor/autoload.php");

        $this->mailer = new PHPMailer;                              // Passing `true` enables exceptions

        //Server settings
        $this->mailer->SMTPDebug = 0;                                 // Enable verbose debug output
        $this->mailer->isSMTP();                                      // Set mailer to use SMTP
        $this->mailer->Host = $host;                // Specify main and backup SMTP servers smtp.gmail.com
        $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mailer->Username = $username;                 // SMTP username'david.dkoficial@gmail.com'
        $this->mailer->Password = $senha;                           // SMTP password
        $this->mailer->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 587;                                    // TCP port to connect to

        //Recipients
        $this->mailer->setFrom($username, $name);

        //Content
        $this->mailer->isHTML(true);                                  // Set email format to HTML
        $this->mailer->CharSet = 'UTF-8';

        //Opções para evitar o erro smtp connect filed
        $this->mailer->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

    }
    public function addAdress($email,$nome){
        $this->mailer->addAddress($email,$nome);     // Add a recipient
    }

    public function formatarEmail($info){
        $this->mailer->Subject  = $info['assunto'];
        $this->mailer->Body     = $info['corpo'];
        $this->mailer->AltBody  = strip_tags($info['corpo']);
    }
    public function enviarEmail(){
        if ($this->mailer->send()){
            return true;
        }else{
            return false;
        }
    }
}