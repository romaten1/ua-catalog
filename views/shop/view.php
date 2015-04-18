<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shop */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <section class="blog-content">
            <div class="wrapper">
                <h1><?= Html::encode( $this->title ) ?></h1>
                <?= 'м' . $model->sity . ' - ' .  $model->address?> <br />

            </div>
    </section>

