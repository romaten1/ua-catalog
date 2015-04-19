<?php

use app\components\filterWidget\FilterWidget;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="blog-content">
    <div class="wrapper clearfix">
        <div class="katalog">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'options' => ['class' => 'katalog-content'],
            'itemOptions' => ['class' => 'type-of-product'],
            'itemView' => '_listItem',
        ]) ?>
        </div>
    </div>
</section>
