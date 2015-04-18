<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\SliderupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sliderups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sliderup'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'      => 'image',
                'format'         => 'image',
                'value'          => function ( $model ) {
                    return '/uploads/slider-up/thumbs/thumb_' . $model->image;
                },
                'contentOptions' => [ 'class' => 'img-thumbnail' ]
            ],
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
