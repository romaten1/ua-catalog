<?php

use app\models\CategoryThird;
use app\modules\admin\models\Lang;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modules\category\models\CategoryThirdLang */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Third Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-third-lang-view">

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
                'attribute' => 'category_id',
                'format'    => 'html',
                'value'     => CategoryThird::findOne($model->category_id)->title,
            ],
            [
                'attribute' => 'lang_id',
                'format'    => 'html',
                'value'     => Lang::findOne($model->lang_id)->name,
            ],
            'title',
        ],
    ]) ?>

</div>
