<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\modules\category\models\CategorySecondLang */

$this->title = Yii::t('app', 'Create Category Second Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Second Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-second-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
