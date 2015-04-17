<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\modules\category\models\CategoryThirdManufacturer */

$this->title = Yii::t('app', 'Create Category Third Manufacturer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Third Manufacturers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-third-manufacturer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
