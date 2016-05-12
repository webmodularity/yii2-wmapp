<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'wmc\models\user\User',
            'loginUrl' => ['/user/login'],
            'enableAutoLogin' => true,ue,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'logTable' => 'log_frontend'
                ]
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'file/<filename>' => 'site/file',
                'file/<pathAlias:[a-zA-Z0-9\-\_]+>/<filename>' => 'site/file',
                'page/<name:.+>' => 'site/page',
            ],
        ],
        'authManager' => [
            'class' => 'wmc\rbac\DbManager',
            'defaultRoles' => ['su', 'admin', 'author', 'user', 'guest'],
        ]
    ],
    'params' => $params,
];
