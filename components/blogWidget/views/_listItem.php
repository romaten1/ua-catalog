<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

if ( ! $model->content->title) {
    $title = $model->title;
} else {
    $title = $model->content->title;
}
?>
<div class="clearfix">
    <div class="review-foto"><img src="<?= '/uploads/post/thumbs/thumb_' . $model->image ?>" alt="Юлія Савостіна">
    </div>
    <div class="review-info">
        <h1><?= $model->content->title ?></h1>

        <p><?= StringHelper::truncateWords( $model->content->text, 20 ) ?></p>
        <a href="<?= Url::to( [ '/post/view', 'id' => $model->id ] ); ?>" title="Читати детальніше" class="more-info">Читати
            детальніше</a>
    </div>
</div>

