<?php
$config = [
    'id' => 'news',
    'basePath' => __DIR__ . '/../',
    'controllerNamespace' => 'app\controllers',
    'viewPath' => __DIR__ . '/../views',
    'defaultRoute' => 'main/index',
    'bootstrap' => ['debug'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'request' => [
            'enableCookieValidation' => false,
            'enableCsrfValidation' => false,
        ]
    ]
];