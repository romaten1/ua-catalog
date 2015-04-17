<?php

use app\models\CategoryThird;
use app\models\Manufacturer;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modules\category\models\CategoryThirdManufacturer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-third-manufacturer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manufacturer_id' )->dropDownList( Manufacturer::getManufacturersArray(), ['prompt'=>'']  ) ?>

    <?= $form->field($model, 'category_id' )->dropDownList( CategoryThird::getCategoriesArray(), ['prompt'=>'']  ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
