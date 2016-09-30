<?php
    /* subject and email variables */
    
        $emailSubject = 'Crazy PHP Scripting!';
        $webMaster = 'samsgriffen@gmail.com';
        
    /* Gathering data variables */
    
        $emailField = $_POST ['email'];
        $nameField = $_POST ['name'];
        $phoneField = $_POST ['phone'];
        $messageField = $_POST ['message'];
        
        $body = <<<EOD
<br><hr><br>
Email: $email <br>
Name: $name <br>
Phone: $phone <br>
Message: $message <br>
EOD;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($webMaster, $emailSubject, $body, $headers);
    
    /* Results rendered as HTML, may not need this */

?>