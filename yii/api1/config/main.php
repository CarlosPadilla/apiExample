<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'app-api1',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'api1\controllers',
    'bootstrap'           => ['log'],
    'modules'             => [],
    'components'          => [
        'request'    => [
            'csrfParam' => '_csrf-api1',
            'parsers'   => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'response'   => [
            'format' => \yii\web\Response::FORMAT_JSON,
        ],
        'user'       => [
            'identityClass'  => 'common\models\User',
            'identityCookie' => ['name' => '_identity-api1', 'httpOnly' => true],
        ],
        'session'    => [
            // this is the name of the session cookie used for login on the api1
            'name' => 'advanced-api1',
        ],
        'log'        => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        // 'errorHandler' => [
        //     'errorAction' => 'site/error',
        // ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'enableStrictParsing' => true,
            'showScriptName'      => false,
            'rules'               => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
            ],
        ],
    ],
    'params'              => $params,
];
