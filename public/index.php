<?php
if (!empty($_SERVER['YII_DEBUG']) || getenv('YII_DEBUG')) {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
}
require '../vendor/autoload.php';

$app = new yii\web\Application(require('../config/main.php'));
$app->run();
