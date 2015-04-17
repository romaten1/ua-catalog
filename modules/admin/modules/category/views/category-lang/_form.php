<?php

use app\models\Category;
use app\models\Lang;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modules\category\models\CategoryLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id' )->dropDownList( Category::getCategoriesArray(), ['prompt'=>'']  ) ?>

    <?= $form->field($model, 'lang_id' )->dropDownList( ArrayHelper::map(Lang::find()->all(), 'id', 'name' ) ) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
