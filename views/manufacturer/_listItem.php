<?php
use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;

?>
<div>
    <h2><?= Html::a( $model->content->title,['/manufacturer/view', 'id' => $model->id]) ?></h2>
    <div> <?= Html::img( '@web/uploads/manufacturer/' . $model->image)   ?></div>
    <div> <?= $model->content->description ?></div>
</div>