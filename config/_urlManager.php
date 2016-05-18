<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 5/16/2016
 * Time: 6:46 PM
 */

return [
	'class'=>'yii\web\UrlManager',
	'enablePrettyUrl'=>true,
	'showScriptName'=>false,
	'rules'=>[
		'<controller:\w+>/' => '<controller>/index',
		'<controller:\w+>/<id:\d+>' => '<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
		'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
	]
];