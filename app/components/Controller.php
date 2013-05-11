<?php

namespace app\components;

class Controller extends \yii\web\Controller
{
    public function getBodyClass()
    {
        return $this->id . ' ' . $this->action->id;
    }
}