<?php 
namespace Lib;

require_once 'iEmailProvider.php';

class MailChimp implements IEmailProvider{

    public function send($subject, $to, $from) {
        return "<b>$subject</b> is sending an email using <b>MailChimp</b> services from <b>$from</b> to <b>$to</b>";
    }

}
