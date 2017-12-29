<?php

// load Composer
require 'vendor/autoload.php';

// $emailObject can be : MailChimp | MailGun | Sengrid
$emailObject = new \Lib\Sengrid();
$emailService = new \Lib\Mailing($emailObject);

var_dump($emailService);
