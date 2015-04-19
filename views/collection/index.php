<?php

use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CollectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = Yii::t( 'app', 'Collections' );
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">

        <h1><?= Html::encode( $this->title ) ?></h1>

        <?php foreach ($model as $item) {
            ?>
            <div>
                <h2><?= Html::a( $item->product->title, [ '/product/view/', 'id' => $item->product_id ] ) ?>
                    <a href="<?= Url::to( [ '/collection/delete', 'id' => $item->id ] ); ?>" title="Видалити"
                       class="button-fav">Видалити</a></h2>

                <div> <?= Html::img( '@web/uploads/product/thumbs/thumb_' . $item->product->image ) ?></div>
                <div> <?= $item->product->content->description ?></div>
                <div> Категорія: <?= Html::a( CategoryThird::getFullCategory( $item->product->category_id ),
                        [ '/category-third/view', 'id' => $item->product->category_id ] ) ?></div>
                <div> Виробник: <?= Html::a( Manufacturer::findOne( $item->product->manufacturer_id )->content->title,
                        [ '/manufacturer/view', 'id' => $item->product->manufacturer_id ] ) ?></div>
            </div>
        <?php
        }?>

    </div>
</section>
