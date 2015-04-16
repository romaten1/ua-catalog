<?php

use app\models\Manufacturer;
use app\models\Product;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin( [
        'options' => [ 'enctype' => 'multipart/form-data' ] // important
    ] ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field( $model, 'manufacturer_id' )->dropDownList( Manufacturer::getManufacturersArray() ) ?>

    <? if ( ! empty( $model->image )) {
        echo Html::img( '@web/uploads/product/' . $model->image );
    } ?>

    <?= $form->field( $model, 'image' )->fileInput() ?>

    <?= $form->field( $model, 'status' )->dropDownList( Product::getStatusArray() ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
