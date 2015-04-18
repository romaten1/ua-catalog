<?php

use yii\helpers\Html;

?>
<div>
    <h2><?= Html::a( $model->content->title,['/category/view', 'id' => $model->id]) ?></h2>
</div>