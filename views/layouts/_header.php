<?php

use yii\helpers\Url;

?>
<div class="header">
    <div class="wrapper clearfix">
        <div class="logo"><a href="#" title="logo"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul class="UAkatalog">
            <li class="UAkatalog-link"><a href="#" title="Каталог">Каталог</a>
                <ul class="sub-menu-lv1">
                    <li class="hygiene"><a href="#" title="Засоби гігієни">Засоби гігієни</a>
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
            <li><a href="#" title="Про нас">Про нас</a></li>
            <li><a href="#" title="Події">Події</a></li>
            <li><a href="#" title="Новини">Новини</a></li>
            <li><a href="<?= Url::to( [ '/post' ] ); ?>" title="Блог">Блог</a></li>
        </ul>
        <div class="personal-info">
            <?php
            if (!Yii::$app->user->isGuest) {
                ?>
                <a href="<?= Url::to( [ '/user/settings/profile' ] ); ?>" class="login">Привіт, <?= Yii::$app->user->identity->username; ?></a>
                <?php
                if(Yii::$app->user->identity->username == 'admin'){ ?>
                    <a href="<?= Url::to( [ '/admin'] ); ?>" title="Адміністрування" class="login" >Адміністрування</a>
                <?php }
                ?>
                <a href="<?= Url::to( [ '/user/security/logout'] ); ?>" data-method="post" title="Вийти" class="login">Вийти</a>
            <?php
            } else {
                ?>
                <a href="<?= Url::to( [ '/user/security/login' ] ); ?>" title="Вхід" class="login">Вхід</a>
                <a href="<?= Url::to( [ '/user/registration/register' ] ); ?>" title="Зареєструватися" class="login">Зареєструватися</a>
            <?php
            }
            ?>
            <a href="#" title="Моя колекція" class="my-collection">Моя колекція</a>
        </div>
        <div class="language">
            <a href="#" title="Укр" class="UA active">Укр</a>
            <a href="#" title="Рос" class="RU">Рос</a>
        </div>
    </div>
</div>
