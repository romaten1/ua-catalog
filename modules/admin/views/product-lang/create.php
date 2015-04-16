<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductLang */

$this->title = Yii::t('app', 'Create Product Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
