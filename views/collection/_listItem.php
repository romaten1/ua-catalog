<?php
use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div>
    <h2><?= Html::a( $model->product->title,['/product/view/', 'id' => $model->product_id]) ?>
        <a href="<?= Url::to( [ '/collection/delete', 'id' => $model->id] ); ?>" title="Видалити" class="button-fav">Видалити</a></h2>
    <div> <?= Html::img( '@web/uploads/product/thumbs/thumb_' . $model->product->image)   ?></div>
    <div> <?= $model->product->content->description ?></div>
    <div> Категорія: <?= Html::a( CategoryThird::getFullCategory($model->product->category_id),
            ['/category-third/view', 'id' => $model->product->category_id]) ?></div>
    <div> Виробник: <?= Html::a( Manufacturer::findOne($model->product->manufacturer_id)->content->title,
        ['/manufacturer/view', 'id' => $model->product->manufacturer_id]) ?></div>


</div>