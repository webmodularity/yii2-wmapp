<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'session' => [
            'class' => 'yii\web\DbSession'
        ],
        'formatter' => [
            'class' => 'wmc\components\Formatter'
        ],
        'alertManager' => [
            'class' => 'wmc\web\AlertManager'
        ]
    ],
];
