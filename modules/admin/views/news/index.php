<?php

use app\models\News;
use dektrium\user\models\User;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    return '/uploads/news/thumbs/thumb_' . $model->image;
                },
                'contentOptions' => [ 'class' => 'img-thumbnail' ]
            ],
            [
                'attribute' => 'author_id',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return User::findOne($model->author_id)->username;
                },
            ],
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
                'filter'    => News::getStatusArray()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
