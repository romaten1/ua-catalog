<?php use yii\helpers\Url;
if(!$model->content->title){
    $title = $model->title;
}else{
    $title = $model->content->title;
}
?>
<li><a href="<?= Url::to( [ '/static-page/view','id' => $model->id] ); ?>"
       title="<?= $title; ?>"><?= $title; ?></a></li>