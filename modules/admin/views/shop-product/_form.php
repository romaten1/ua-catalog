<?php

use app\models\Category;
use app\models\Product;
use app\models\Shop;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShopProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shop_id' )->dropDownList( Shop::getShopArray(), ['prompt'=>'']  ) ?>

    <?= $form->field($model, 'product_id' )->dropDownList( Product::getProductArray(), ['prompt'=>'']  ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
