<?php 

interface IEmailProvider {

    public function send($subject, $to, $from);

}
