<?php

$config = [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yiiloc',
            'username' => 'root',
            'password' => 'secret',
            'charset' => 'utf8',
        ],

        'mailer' => [
            'class'=>'yii\symfonymailer\Mailer',
            'useFileTransport'=> false,
            'transport'=> [
                'dsn'=>'smtp://yahyobek7316@gmail.com:yykkyhigueaubwgl@smtp.gmail.com:465',
            ],
        ],
            'billing' => [
                'class' => 'frontend\modules\billing\Billing',
            ],
        ],
    ];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => \yii\debug\Module::class,
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => \yii\gii\Module::class,
    ];
}

return $config;