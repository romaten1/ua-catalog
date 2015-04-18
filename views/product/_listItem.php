<?php
use yii\helpers\Url;

if ( ! $model->content->title) {
    $title = $model->title;
} else {
    $title = $model->content->title;
}
?>

<img src="<?= '/uploads/product/thumbs/thumb_' . $model->image ?> " alt="<?= $title; ?>">
<a href="<?= Url::to( [ '/product/view', 'id' => $model->id ] ); ?>"
   title="<?= $title; ?>"><span class="image-label"><?= $title; ?></span></a>
