<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 6/21/2016
 * Time: 0:45
 */

$config = [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2-basic-afs',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

        // ... other components
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
