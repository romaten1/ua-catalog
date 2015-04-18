<?php
use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;

?>
<div>
    <h2><?= Html::a( $model->product->title,['/product/view', 'id' => $model->product_id]) ?></h2>
    <div> <?= Html::img( '@web/uploads/product/' . $model->product->image)   ?></div>
    <div> <?= $model->product->content->description ?></div>
    <div> <?= Html::a( CategoryThird::getFullCategory($model->product->category_id),
            ['/category-third/view', 'id' => $model->product->category_id]) ?></div>
    <div> <?= Html::a( Manufacturer::findOne($model->product->manufacturer_id)->content->title,
        ['/manufacturer/view', 'id' => $model->product->manufacturer_id]) ?></div>

</div>