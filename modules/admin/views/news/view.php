<?php

use app\models\News;
use dektrium\user\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Список'), ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Створити'), ['create'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Створити переклад'), ['/admin/news-lang/create', 'news_id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            [
                'attribute' => 'image',
                'value'     => $model->image ? Html::img( '@web/uploads/news/' . $model->image ) : 'Малюнок на сайті відсутній',
                'format'    => 'html'
            ],
            [
                'attribute' => 'author_id',
                'format'    => 'html',
                'value'     => User::findOne($model->author_id)->username,
            ],
            [
                'attribute' => 'status',
                'value'     => News::getStatus( $model->status ),
            ],
            [
                'attribute' => 'updated_at',
                'format'    => 'date',
            ],
            [
                'attribute' => 'created_at',
                'format'    => 'date',
            ],
        ],
    ]) ?>

</div>
