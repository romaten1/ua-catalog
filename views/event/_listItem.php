<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

?>
<div>
    <h2><?= Html::a( $model->content->title,['/event/view', 'id' => $model->id]) ?></h2>
    <div> <?= StringHelper::truncateWords($model->content->description, 120) ?></div>
</div>