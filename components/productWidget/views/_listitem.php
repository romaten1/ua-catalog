<?php
use yii\helpers\Url;

if ( ! $model->content->title) {
$title = $model->title;
} else {
$title = $model->content->title;
}
?>

<a href="<?= Url::to( [ '/product/view', 'id' => $model->id ] ); ?>"
   title="<?= $title; ?>" class="item-foto"><img src="<?= '/uploads/product/' . $model->image ?>" height="275" alt="<?= $title; ?>"></a>
<?php if(abs($model->created_at - time())/60/60/24 < 30){ ?>
    <div class="item-label">новий
    </div>
<?php } ?>
<a href="#" title="<?= $title; ?>" class="item-info"><?= $title; ?></a>
<a href="#" title="Grâce à vous" class="item-brand"><?= $model->manufacturer->content->title; ?></a>
<div class="price-container clearfix">
    <span class="item-price"><?= $model->price; ?> ₴</span>
    <a href="<?= Url::to( [ '/collection/create', 'id' => $model->id],true ); ?>" title="В обране" class="button-fav">В обране</a>
</div>
