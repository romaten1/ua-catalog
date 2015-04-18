<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Основні категорії продуктів');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => '_listItem',
        ]) ?>

    </div>
</section>
