<?php

use app\models\Event;
use app\models\Lang;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EventLang */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Event Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-lang-view">

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
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'event_id',
                'format'    => 'html',
                'value'     => Event::findOne($model->event_id)->title,
            ],
            [
                'attribute' => 'lang_id',
                'format'    => 'html',
                'value'     => Lang::findOne($model->lang_id)->name,
            ],
            'title',
            [
                'attribute' => 'description',
                'format'    => 'html',
            ],
        ],
    ]) ?>

</div>
