<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 6/21/2016
 * Time: 0:45
 */

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=prod_db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],

        // ... other components ...
    ],
];
