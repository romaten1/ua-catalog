<?php

use app\components\attachmentWidget\AttachmentWidget;
use app\components\manProductWidget\ManProductWidget;
use app\models\CategoryThird;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;

?>
<section class="product-page">
    <div class="wrapper">
        <div class="breadcrumbs">
            <?= CategoryThird::getBreadcrumbs($model->category_id)  ?>
        </div>
        <div class="clearfix">
            <div class="product-large-foto">
                <a href="#" title=""><img src="<?= '/uploads/product/' . $model->image ?>" alt=""></a>
            </div>
            <div class="carousel">
                <ul class="carousel-list">
                    <?= AttachmentWidget::Widget(['product_id' => $model->id]) ?>
                </ul>
                <ul class="carousel-nav">
                    <li><a href="#" title="down" class="down"></a></li><!--
					--><li><a href="#" title="up" class="up"></a></li>
                </ul>
            </div>
            <div class="product-info">
                <h1><?= $model->content->title ?></h1>
                <h3>Виробник: <a href="<?= Url::to( [ '/manufacturer/view', 'id' => $model->manufacturer->id] ); ?>" title="<?= $model->manufacturer->title ?>"><?= $model->manufacturer->title ?></a></h3>
                <h3>Категорія: <a href="<?= Url::to( [ '/category-third/view', 'id' => $model->category_id] ); ?>" title=""><?= CategoryThird::getFullCategory($model->category_id) ?></a></h3>
                <ul class="social-list">
                    <li><a href="#" title="fb" class="fb"> </a></li><!--
		    		--><li><a href="#" title="vk" class="vk"> </a></li><!--
		    		--><li><a href="#" title="twitter" class="twitter"> </a></li><!--
		    		--><li><a href="#" title="pinterest" class="pinterest"> </a></li>
                </ul>
                <div class="price-block clearfix">
                    <span class="item-price"><?= $model->price ?> ₴</span>
                    <a href="<?= $model->manufacturer->site ?>" title="Сайт виробника" class="button-site">Сайт виробника</a>
                    <a href="<?= Url::to( [ '/collection/create', 'id' => $model->id],true ); ?>" title="В обране" class="button-fav">В обране</a>
                </div>
                <h2>Опис</h2>
                <?= $model->content->description ?>
                <h2>Де купити</h2>
                <ul class="adres">
                    <li>«Отаман» Київ, вул. Михайлівська 21 А</li>
                    <li>«Отаман» Київ, вул.Грушевського, 28/2</li>
                </ul>
            </div>
        </div>
        <div class="such-brand-head">Товари виробника <?= $model->manufacturer->content->title ?></div>
        <div class="such-brand">
            <?= ManProductWidget::Widget(['manufacturer_id' => $model->manufacturer_id]) ?>
        </div>
    </div>
</section>
