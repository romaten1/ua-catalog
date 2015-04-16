<?php

use app\models\Lang;
use app\models\StaticPage;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaticLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Static Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Static Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'static_id',
                'value'     => function ( $model ) {
                    $page = StaticPage::findOne( $model->static_id );
                    return $page->title;
                },
                'filter'    => ArrayHelper::map( StaticPage::find()->all(), 'id', 'title' ),
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
                'attribute' => 'text',
                'format'    => 'html',
                'value'     => function ( $model ) {
                    return StringHelper::truncateWords($model->text, 50);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
