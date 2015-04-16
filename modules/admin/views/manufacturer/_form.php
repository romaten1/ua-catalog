<?php

use app\models\Manufacturer;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacturer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manufacturer-form">

    <?php $form = ActiveForm::begin( [
        'options' => [ 'enctype' => 'multipart/form-data' ] // important
    ] ); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <? if ( ! empty( $model->image )) {
        echo Html::img( '@web/uploads/manufacturer/' . $model->image );
    } ?>

    <?= $form->field( $model, 'image' )->fileInput() ?>

    <?= $form->field($model, 'site')->textInput() ?>

    <?= $form->field( $model, 'status' )->dropDownList( Manufacturer::getStatusArray() ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
