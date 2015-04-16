<?php

use app\models\Manufacturer;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ManufacturerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manufacturers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacturer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Manufacturer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute'      => 'image',
                'format'         => 'image',
                'value'          => function ( $model ) {
                    return '/uploads/manufacturer/thumbs/thumb_' . $model->image;
                },
                'contentOptions' => [ 'class' => 'img-thumbnail' ]
            ],
            'site',
            [
                'attribute' => 'updated_at',
                'format'    => 'date',
            ],
            [
                'attribute' => 'created_at',
                'format'    => 'date',
            ],
            [
                'attribute' => 'status',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return $model->getStatusLabel();
                },
                'filter'    => Manufacturer::getStatusArray()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
