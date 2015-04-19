<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
?>
<div class="search-container-blog">
    <div class="search-block">
        <div class="search-block-container">
            <div class="search-head">
                Повний каталог українських виробників
            </div>
            <form action="<?= Url::to( [ '/product' ] ); ?>" method="get">
                <input type="text" name="search" placeholder="Назва товару"><!--
				--><input type="submit" name="search-buton" value=" ">
            </form>
        </div>
    </div>
</div>