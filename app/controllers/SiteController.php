<?php
namespace app\controllers;

class SiteController extends \app\components\Controller
{
    public function actionIndex()
    {
        echo $this->render('index');
    }
}
