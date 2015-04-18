<?php

use app\components\mainCategoryWidget\MainCategoryWidget;
use yii\helpers\Url;
use app\components\widgets\Lang;

?>
<div class="header">
    <div class="wrapper clearfix">
        <div class="logo"><a href="<?= Url::home(); ?>" title="logo"><img src="/img/logo.png" alt="logo"></a>
        </div>
        <ul class="UAkatalog">
            <?= MainCategoryWidget::Widget() ?>
        </ul>
        <ul class="main-menu">
            <li><a href="<?= Url::to( [ '/static-page/view', 'id' => 2] ); ?>" title="Про нас"><?= Yii::t('app', 'Про нас') ?></a></li>
            <li><a href="<?= Url::to( [ '/event'] ); ?>" title="Події"><?= Yii::t('app', 'Події') ?></a></li>
            <li><a href="<?= Url::to( [ '/news'] ); ?>" title="Новини"><?= Yii::t('app', 'Новини') ?></a></li>
            <li><a href="<?= Url::to( [ '/post' ] ); ?>" title="Блог"><?= Yii::t('app', 'Блог') ?></a></li>
        </ul>
        <div class="personal-info">
            <?php
            if (!Yii::$app->user->isGuest) {
                ?>
                <a href="<?= Url::to( [ '/user/settings/profile' ] ); ?>" class="login"><?=Yii::t('app', 'Привіт,')?> <?= Yii::$app->user->identity->username; ?></a>
                <?php
                if(Yii::$app->user->identity->username == 'admin'){ ?>
                    <a href="<?= Url::to( [ '/admin'] ); ?>" title="Адміністрування" class="login" ><?=Yii::t('app', 'Адміністрування')?></a>
                <?php }
                ?>
                <a href="<?= Url::to( [ '/user/security/logout'] ); ?>" data-method="post" title="Вийти" class="login"><?=Yii::t('app', 'Вийти')?></a>
            <?php
            } else {
                ?>
                <a href="<?= Url::to( [ '/user/security/login' ] ); ?>" title="Вхід" class="login"><?=Yii::t('app', 'Вхід')?></a>
                <a href="<?= Url::to( [ '/user/registration/register' ] ); ?>" title="Зареєструватися" class="login"><?=Yii::t('app', 'Зареєструватися')?></a>
            <?php
            }
            ?>
            <a href="<?= Url::to( [ '/collection' ] ); ?>" title="Моя колекція" class="my-collection"><?=Yii::t('app', 'Моя колекція')?></a>
        </div>
        <?= Lang::widget();?>

    </div>
</div>
