<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'third_party/swift_mailer/swift_required.php';

if(!function_exists('sendMail'))
{
    function sendMail($subject, $content, $to)
    {
        $CI = &get_instance();
        $CI->config->load('smtp');
        $SMTP = $CI->config->item('smtp');

        $transport = \Swift_SmtpTransport::newInstance()
            ->setUsername($SMTP['username'])
            ->setPassword($SMTP['password'])
            ->setHost($SMTP['host'])
            ->setPort($SMTP['port']);

        if($SMTP['tls'])
        {
            $transport = $transport->setEncryption('tls');
        }

        $mailer = Swift_Mailer::newInstance($transport);

        $message = Swift_SignedMessage::newInstance();
        $message->setSubject($subject)
                ->setFrom([$SMTP['emailFrom'] => $SMTP['usernameFrom']])
                ->setTo($to)
                ->setBody(strip_tags($content), 'text/plain')
                ->addPart($content, 'text/html');

        $mailer->send($message, $failures);
        return $failures;
    }
}
