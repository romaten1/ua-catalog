<?php

use app\models\Lang;
use app\models\News;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create News Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'news_id',
                'value'     => function ( $model ) {
                    $post = News::findOne( $model->news_id );
                    return $post->title;
                },
                'filter'    => ArrayHelper::map( News::find()->all(), 'id', 'title' ),
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
