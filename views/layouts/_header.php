<?php

use yii\helpers\Url;
use app\components\widgets\Lang;

?>
<div class="header">
    <div class="wrapper clearfix">
        <div class="logo"><a href="#" title="logo"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul class="UAkatalog">
            <li class="UAkatalog-link"><a href="#" title="Каталог"><?= Yii::t('app', 'Каталог')?></a>
                <ul class="sub-menu-lv1">
                    <li class="hygiene"><a href="#" title="Засоби гігієни"><?= Yii::t('app', 'Засоби гігієни')?></a>
                        <ul class="sub-menu-lv2">
                            <li class="personal-hygiene"><a href="#" title="Особиста гігієна">Особиста гігієна</a>
                                <ul class="sub-menu-lv3">
                                    <li><a href="#" title="Зубні пасти">Зубні пасти</a></li>
                                    <li><a href="#" title="Шампуні">Шампуні</a></li>
                                    <li><a href="#" title="Мило">Мило</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Для дому">Для дому</a></li>
                            <li><a href="#" title="Для дітей">Для дітей</a></li>
                            <li><a href="#" title="Жіноча гігієна">Жіноча гігієна</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Одяг">Одяг</a></li>
                    <li><a href="#" title="Взуття">Взуття</a></li>
                    <li><a href="#" title="Сумки">Сумки</a></li>
                    <li><a href="#" title="Косметика">Косметика</a></li>
                    <li><a href="#" title="Прикраси">Прикраси</a></li>
                    <li><a href="#" title="Посуд">Посуд</a></li>
                    <li><a href="#" title="Дитячі товари">Дитячі товари</a></li>
                    <li><a href="#" title="Їжа">Їжа</a></li>
                    <li><a href="#" title="Алкогольні напої">Алкогольні напої</a></li>
                    <li><a href="#" title="Різне">Різне</a></li>
                </ul>
            </li>
        </ul>
        <ul class="main-menu">
            <li><a href="#" title="Про нас"><?= Yii::t('app', 'Про нас') ?></a></li>
            <li><a href="#" title="Події"><?= Yii::t('app', 'Події') ?></a></li>
            <li><a href="#" title="Новини"><?= Yii::t('app', 'Новини') ?></a></li>
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
            <a href="#" title="Моя колекція" class="my-collection"><?=Yii::t('app', 'Моя колекція')?></a>
        </div>
        <?= Lang::widget();?>

    </div>
</div>
