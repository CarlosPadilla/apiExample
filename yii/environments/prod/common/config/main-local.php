<?php
return [
    'components' => [
        'db'     => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'pgsql:host=db;port=5432;dbname=api',
            'username' => 'api',
            'password' => 'api',
            'charset'  => 'UTF8',
        ],
        'mailer' => [
            'class'    => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
