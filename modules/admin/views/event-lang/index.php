<?php

use app\models\Event;
use app\models\Lang;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\EventLang */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Event Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Event Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'event_id',
                'value'     => function ( $model ) {
                    $post = Event::findOne( $model->event_id );
                    return $post->title;
                },
                'filter'    => ArrayHelper::map( Event::find()->all(), 'id', 'title' ),
            ],
            [
                'attribute' => 'lang_id',
                'value'     => function ( $model ) {
                    $lang = Lang::findOne( $model->lang_id );
                    return $lang->name;
                },
                'filter'    => ArrayHelper::map( Lang::find()->all(), 'id', 'name' ),
            ],
            'title',
            [
                'attribute' => 'description',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return StringHelper::truncateWords($model->text, 50);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
