<?php


namespace App\service;


class MailService
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;


    /**
     * MailService constructor.
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this -> mailer = $mailer;
    }

    public function Send($email,$objet,$sms)
    {
        $message = (new \Swift_Message($objet))
            ->setFrom('send@example.com')
            ->setTo($email)
            ->setBody($sms);


        $this->mailer->send($message);
    }

}