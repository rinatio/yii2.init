<?php
/**
 * @var $this \yii\base\View
 * @var $content string
 */
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$this->title?></title>
    <meta name="viewport" content="width=device-width">
    <?php $this->head(); ?>
</head>
<body class="<?=$this->context->bodyClass?>">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="container">
    <?php $this->beginBody(); ?>
    <header>
        <h1><?=Yii::$app->id?></h1>
    </header>
    <div class="content">
        <?= $content?>
    </div>
    <footer></footer>
    <?php $this->endBody(); ?>
</div>
</body>
</html>
<?php $this->endPage(); ?>
