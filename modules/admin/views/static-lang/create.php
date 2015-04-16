<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaticLang */

$this->title = Yii::t('app', 'Create Static Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Static Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
