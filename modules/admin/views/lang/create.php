<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lang */

$this->title = Yii::t('app', 'Create Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
