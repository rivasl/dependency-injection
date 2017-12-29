<?php 
namespace Lib;

require_once 'iEmailProvider.php';

class Mailing {
    
    private $eProvider;
        
    public function __CONSTRUCT(IEmailProvider $_eProvider) {
        $this->eProvider = $_eProvider;
    }
    
    public function sendToUsers() {
        $mails = ['erodriguezp105@gmail.com', 'user1@gmail.com', 'user2@gmail.com'];
        
        foreach($mails as $mail) {
            echo $this->eProvider->send('News from my website', $mail, 'admin@mywebsite.com') . '<br />';
        }
    }
}
