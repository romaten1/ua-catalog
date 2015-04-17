<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryThird */

$this->title = Yii::t('app', 'Create Category Third');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Thirds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-third-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
