<?php
if(!defined('BASEPATH')) exit('No direct script is allowed');

class Mailing extends MY_Controller
{
    public function index()
    {
        $this->layout->setTitle('Mailing with SwiftMailer');
        $this->layout->setCurrentPage('Mailing');
        $this->layout->setTheme('mailing');

        $this->load->helper('mail');
        $subject = 'Send Mail test';

        $varMail = array(
            "nickname" => 'Anxic',
            "testVar" => 'This is a test'
        );

        $content = $this->load->view('mail/testMail_view', $varMail, true);
        $to = 'codeigniter@yopmail.com';
        sendMail($subject, $content, $to);

        $this->viewVars['to'] = $to;
        $this->layout->view('mailing_view', $this->viewVars);
    }
}
?>
