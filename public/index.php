<?php
if (!empty($_SERVER['YII_DEBUG']) || getenv('YII_DEBUG')) {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
}
//Uncomment following line if you wish to use Yii autoloader first
//require __DIR__ . '/../vendor/yiisoft/yii2/yii/Yii.php';
require __DIR__ . '/../vendor/autoload.php';

$app = new yii\web\Application(require('../config/main.php'));
$app->run();
