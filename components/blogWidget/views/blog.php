<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{items}',
    'options' => ['class' => 'slider-reviews-content'],
    'itemOptions' => ['class' => 'slider-reviews-content-item'],
    'itemView'     => '_listItem',

]) ?>
