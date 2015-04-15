<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register( $this );
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode( $this->title ) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?= $this->render( '_header' ) ?>
    <div class="wrapper">
        <?= Breadcrumbs::widget( [
            'links'    => isset( $this->params['breadcrumbs'] ) ? $this->params['breadcrumbs'] : [ ],
            'homeLink' => [ 'label' => 'Головна', 'url' => [ '/site/index' ] ],
        ] ) ?>
    </div>

    <?= $content ?>
    <p class="UA-brand-head">НАйпопулярніші українські виробники</p>
    <?= $this->render( '_footer' ) ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>