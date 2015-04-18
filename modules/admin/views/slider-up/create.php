<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliderup */

$this->title = Yii::t('app', 'Create Sliderup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sliderups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
