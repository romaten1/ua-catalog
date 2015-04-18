<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

?>
<div>
    <h2><?= Html::a( $model->content->title,['/news/view', 'id' => $model->id]) ?></h2>
    <div> <?= Html::img( '@web/uploads/news/thumbs/thumb_' . $model->image)   ?></div>
    <div> <?= StringHelper::truncateWords($model->content->text, 120) ?></div>
</div>