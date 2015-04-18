<?php

use app\components\manufacturerWidget\ManufacturerWidget;
use app\components\newsWidget\NewsWidget;
use app\components\staticWidget\StaticWidget;
use app\models\StaticPage;
use yii\helpers\Url;

?>
<div class="footer">

    <?php
    echo ManufacturerWidget::widget(); ?>
    <div class="footer-container">
        <div class="wrapper">
            <div class="footer-lists">
                <div class="footer-column column-1">
                    <span class="list-head">Про нас</span>
                    <ul>
                    <?= StaticWidget::Widget(['type' => StaticPage::TYPE_ABOUT]) ?>
                    </ul>
                    <span class="social-head">бУДЬТЕ НА ЗВ’ЯЗКУ</span>
                    <ul class="social-list">
                        <li><a href="#" title="" class="fb"> </a></li><!--
    			    		--><li><a href="#" title="" class="vk"> </a></li><!--
    			    		--><li><a href="#" title="" class="twitter"> </a></li><!--
    			    		--><li><a href="#" title="" class="pinterest"> </a></li>
                    </ul>
                    <ul class="copyright">
                        <li>2015 UA КАТАЛОГ</li>
                        <li>© Всі права захищені</li>
                        <li>Всі ціни вказані в гривнях</li>
                        <li>з урахуванням ПДВ</li>
                        <li><a href="#" title="Правова інформація">Правова інформація</a></li>
                    </ul>
                </div><!--
    			    --><div class="footer-column column-2">
                    <span class="list-head">Виробникам</span>
                    <ul>
                    <?= StaticWidget::Widget(['type' => StaticPage::TYPE_MANUFACTURER]) ?>
                    </ul>
                </div><!--
    			    --><div class="footer-column column-3">
                    <span class="list-head">Користувачам</span>
                    <ul>
                        <li><a href="<?= Url::to( [ '/collection'] ); ?>" title="Власна колекція">Власна колекція</a></li>

                        <?= StaticWidget::Widget(['type' => StaticPage::TYPE_USER]) ?>
                    </ul>
                </div><!--
    			    --><div class="footer-column column-4">
                    <span class="list-head">НОВИНИ ТА ПУБЛІКАЦІЇ</span>
                    <ul class="list-news">
                        <?= NewsWidget::Widget() ?>
                    </ul>
                    <span class="good-news">Ми приносимо ТІЛЬКИ ДОБРІ НОВИНИ</span>
                    <span class="good-news-rss">Підпишись та дізнавайся першим</span>
                    <form action="index.php" method="get">
                        <input type="text" name="Email" placeholder="Email">
                        <input type="submit" name="submit" value="Підписатись">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>