<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'controllerMap' => [
        'dashboard' => 'backend\controllers\DashboardController'
    ],
    'adminSettings' => [
        'user' => [
            'register' => [
                //'webRegistration' => false,
                //'newUserStatus' => \wmc\models\user\User::STATUS_ACTIVE
            ]
        ],
        'template' => [
            'skin' => 'blue'
        ]
    ],
    'components' => [],
    'params' => $params,
];
