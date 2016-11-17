<?php
return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@common/mail',
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.163.com',
        'username' => 'zeopean@163.com',
        'password' => 'zpzeopean759',
        'port' => '25',
        'encryption' => 'tls',
    ],
    'messageConfig'=>[
        'charset'=>'UTF-8',
        'from'=>['zeopean@163.com'=>'zeopean']
    ],
];