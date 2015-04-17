<?php

use app\models\StaticPage;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaticPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Static Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Static Page'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'status',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return $model->getStatusLabel();
                },
                'filter'    => StaticPage::getStatusArray()
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
                'attribute' => 'type',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return $model->getTypeLabel();
                },
                'filter'    => StaticPage::getTypeArray()
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{translate} {view} {update} {delete}',
                'buttons' => [

                    'translate' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-globe"</span>',
                            ['/admin/static-lang/create', 'static_id' => $model->id],
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
