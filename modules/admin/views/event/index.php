<?php

use app\models\Event;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Events');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Event'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'date',
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
                'filter'    => Event::getStatusArray()
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{translate} {view} {update} {delete}',
                'buttons' => [

                    'translate' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-globe"</span>',
                            ['/admin/event-lang/create', 'news_id' => $model->id],
                            [
                                'title' => 'Створити переклад',
                            ]
                        );
                    },
                ],
            ],
        ],
    ]); ?>

</div>
