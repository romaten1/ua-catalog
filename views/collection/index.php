<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CollectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Collections');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collection-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Collection'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->id), ['view', 'id' => $model->id]);
        },
    ]) ?>

</div>
