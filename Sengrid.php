<?php 

require_once 'iEmailProvider.php';

class Sengrid implements IEmailProvider
{

    public function send ($subject, $to, $from)
    {
        return "<b>$subject</b> is sending an email using <b>Sengrid</b> services from <b>$from</b> to <b>$to</b>";
    }

}
