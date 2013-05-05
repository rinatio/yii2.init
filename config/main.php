<?php

return array(
    'id' => 'My Site',
    'basePath' => '../src/',
    'defaultRoute' => 'site',
    'components' => array(
        'urlManager' => array(
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
    )
);

