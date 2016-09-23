<?php

require_once __DIR__.'/vendor/autoload.php';

$tp = \Swift_SmtpTransport::newInstance('smtp.protectedtrust.com',587,'tls')
    ->setUsername('o7AMPAyJXlk2BtgI')
    ->setPassword('Vde1cRP8W1TF8KuOsKiI');
$mailer = \Swift_Mailer::newInstance($tp);
$msg = \Swift_Message::newInstance()
    ->setSubject('Testing message policy')
    ->setFrom(['protectedmessage@ncbpinc.com'])
    ->setTo(['legattd@ncbpinc.com','swansonm@ncbpinc.com','notificationarchive@ncbpinc.com'])
    ->setBody('<h1>Testing message policy</h1>','text/html');
$mailer->send($msg);
