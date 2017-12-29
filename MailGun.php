<?php 

require_once 'iEmailProvider.php';

class MailGun implements IEmailProvider
{
    public function send($subject, $to, $from)
    {
        return "<b>$subject</b> is sending an email using <b>MailGun</b> services from <b>$from</b> to <b>$to</b>";
    }
}
