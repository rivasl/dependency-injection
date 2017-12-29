<?php

require_once 'MailChimp.php';
require_once 'MailGun.php';
require_once 'Sengrid.php';
require_once 'Mailing.php';

// $emailObject = new MailChimp();
$emailObject = new Sengrid();
$emailService = new Mailing($emailObject);

var_dump($emailService);
