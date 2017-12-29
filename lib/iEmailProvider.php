<?php 
namespace Lib;

interface IEmailProvider {

    public function send($subject, $to, $from);

}
