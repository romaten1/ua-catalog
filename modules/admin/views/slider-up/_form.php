<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliderup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sliderup-form">

    <?php $form = ActiveForm::begin( [
        'options' => [ 'enctype' => 'multipart/form-data' ] // important
    ] ); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <? if ( ! empty( $model->image )) {
        echo Html::img( '@web/uploads/slider-up/' . $model->image );
    } ?>

    <?= $form->field( $model, 'image' )->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
