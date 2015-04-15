<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PostLang */

$this->title = Yii::t('app', 'Create Post Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
