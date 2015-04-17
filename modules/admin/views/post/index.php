<?php

use app\models\Post;
use dektrium\user\models\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Створити заготовку запису'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    return '/uploads/post/thumbs/thumb_' . $model->image;
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
                'attribute' => 'status',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return $model->getStatusLabel();
                },
                'filter'    => Post::getStatusArray()
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
                'class' => 'yii\grid\ActionColumn',
                'template' => '{translate} {view} {update} {delete}',
                'buttons' => [

                    'translate' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-globe"</span>',
                            ['/admin/post-lang/create', 'post_id' => $model->id],
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
