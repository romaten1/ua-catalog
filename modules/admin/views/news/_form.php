<?php

use app\models\News;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin( [
        'options' => [ 'enctype' => 'multipart/form-data' ] // important
    ] ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <? if ( ! empty( $model->image )) {
        echo Html::img( '@web/uploads/news/' . $model->image );
    } ?>

    <?= $form->field( $model, 'image' )->fileInput() ?>

    <?= $form->field( $model, 'status' )->dropDownList( News::getStatusArray() ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
