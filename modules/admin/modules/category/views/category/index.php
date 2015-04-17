<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$translate_url = Url::to( [ '/admin/category/category-lang/create', ['category_id' => $model->id]] );

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Переклади категорій'), ['/admin/category/category-lang'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'class',
            [
                'attribute' => 'created_at',
                'format'    => 'date',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{translate} {view} {update} {delete}',
                'buttons' => [

                    'translate' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-globe"</span>',
                            ['/admin/category/category-lang/create', 'category_id' => $model->id],
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
