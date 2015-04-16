<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ManufacturerLang */

$this->title = Yii::t('app', 'Create Manufacturer Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Manufacturer Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacturer-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
