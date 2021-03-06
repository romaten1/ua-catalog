<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => 'UA каталог',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'uk',
    'sourceLanguage' => 'en-EN',
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableConfirmation' => false,
            'admins' => ['admin'],
            //'layout' => '@app/modules/admin/views/layouts/main',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'modules' => [
                'category' => [
                    'class' => 'app\modules\admin\modules\category\Module',
                ],
            ],
        ],
    ],
    'components' => [
        'request' => [
            'class' => 'app\components\LangRequest',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'MAYJRupSa-qEagLa64Bf5epcw2ZFM0h_',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'app\components\LangUrlManager',
            'rules'=>[
                '/' => 'site/index',
                '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
                ['class' => 'yii\rest\UrlRule', 'controller' => ['stat', 'category-rest']],
            ]
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/modules/admin/views/user'
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => 'uploads/files',
                'name' => 'Files'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
