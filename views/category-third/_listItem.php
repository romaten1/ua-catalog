<?php
use yii\helpers\Url;

if ( ! $model->content->title) {
    $title = $model->title;
} else {
    $title = $model->content->title;
}

?>

    <a href="<?= Url::to( [ '/product/view', 'id' => $model->id] ); ?>" title="<?= $title; ?>" class="item-foto"><img height="247px" src="<?= '/uploads/product/' . $model->image; ?>" alt="item_1"></a>
<?php if(abs($model->created_at - time())/60/60/24 < 30){ ?>
    <div class="item-label">новий
    </div>
<?php } ?>
    <a href="<?= Url::to( [ '/product/view', 'id' => $model->id] ); ?>" title="<?= $title; ?>" class="item-info"><?= $title; ?></a>
    <a href="<?= Url::to( [ '/manufacturer/view', 'id' => $model->manufacturer->id] ); ?>" title="<?= $model->manufacturer->content->title; ?>" class="item-brand"><?= $model->manufacturer->content->title; ?></a>

    <div class="price-container clearfix">
        <span class="item-price"><?= $model->price; ?> ₴</span>
        <a href="<?= Url::to( [ '/collection/create', 'id' => $model->id] ); ?>" title="В обране" class="button-fav">В обране</a>
    </div>
