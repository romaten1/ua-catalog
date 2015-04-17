<?php

use app\models\CategorySecond;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CategoryThirdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Category Thirds');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-third-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category Third'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Переклади категорій'), ['/admin/category/category-third-lang'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'parent_id',
                'value'     => function ( $model ) {
                    $parent = CategorySecond::findOne( $model->parent_id );
                    return $parent->title;
                },
                'filter'    => CategorySecond::getCategoriesArray(),
            ],
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
                            ['/admin/category/category-third-lang/create', 'category_id' => $model->id],
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
