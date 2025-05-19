<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/flex-objects/nethits-spa/user/plugins/email/email.yaml',
    'modified' => 1747643265,
    'size' => 235,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'to' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => NULL,
                'password' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
