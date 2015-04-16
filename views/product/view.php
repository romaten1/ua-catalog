<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="product-page">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a href="#" title="Одяг">Одяг</a> >
            <a href="#" title="Жіночий одяг">Жіночий одяг</a> >
            <a href="#" title="Отаман"> Отаман</a> >
            <a href="#" title="Вишиванка батистова з поясом">Вишиванка батистова з поясом</a>
        </div>
        <div class="clearfix">
            <div class="product-large-foto">
                <a href="#" title=""><img src="<?= '/uploads/product/' . $model->image ?>" alt=""></a>
            </div>
            <div class="carousel">
                <ul class="carousel-list">
                    <li><a href="#" title="product_foto_2"><img src="img/product_foto_2.jpg" alt="product_foto_2"></a></li>
                    <li><a href="#" title="product_foto_3"><img src="img/product_foto_3.jpg" alt="product_foto_3"></a></li>
                    <li><a href="#" title="product_foto_4"><img src="img/product_foto_4.jpg" alt="product_foto_4"></a></li>
                    <li><a href="#" title="product_foto_5"><img src="img/product_foto_5.jpg" alt="product_foto_5"></a></li>
                </ul>
                <ul class="carousel-nav">
                    <li><a href="#" title="down" class="down"></a></li><!--
					--><li><a href="#" title="up" class="up"></a></li>
                </ul>
            </div>
            <div class="product-info">
                <h1><?= $model->content->title ?></h1>
                <h3>Виробник: <a href="#" title="<?= $model->manufacturer->title ?>"><?= $model->manufacturer->title ?></a></h3>
                <h3>Категорія: <a href="#" title="Жіночий одяг. Блузи">Жіночий одяг. Блузи</a></h3>
                <ul class="social-list">
                    <li><a href="#" title="fb" class="fb"> </a></li><!--
		    		--><li><a href="#" title="vk" class="vk"> </a></li><!--
		    		--><li><a href="#" title="twitter" class="twitter"> </a></li><!--
		    		--><li><a href="#" title="pinterest" class="pinterest"> </a></li>
                </ul>
                <div class="price-block clearfix">
                    <span class="item-price"><?= $model->price ?> ₴</span>
                    <a href="<?= $model->manufacturer->site ?>" title="Сайт виробника" class="button-site">Сайт виробника</a>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
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
        <div class="such-brand-head">Інші товари виробника Отаман</div>
        <div class="such-brand">
            <div class="such-brand-item">
                <img src="img/otaman_1.jpg" alt="otaman_1">
                <span class="image-label">Блуза "Гуцульська"</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_2.jpg" alt="otaman_2">
                <span class="image-label">Пояс шкіряний чорний</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_3.jpg" alt="otaman_3">
                <span class="image-label">Вишиванка батистова з молочною вишивкою</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_4.jpg" alt="otaman_4">
                <span class="image-label">Вишиванка рожева з ручною вишивкою</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_5.jpg" alt="otaman_5">
                <span class="image-label">Жупанчик зелений з поясом</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_6.jpg" alt="otaman_6">
                <span class="image-label">Жупан жаккардовий синій</span>
            </div>
            <div class="such-brand-item">
                <img src="img/otaman_7.jpg" alt="otaman_7">
                <span class="image-label">Жупан жаккардовий синій</span>
            </div>
        </div>
    </div>
</section>
