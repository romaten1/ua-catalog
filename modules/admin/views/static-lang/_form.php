<?php

use app\models\Lang;
use app\models\StaticPage;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
/* @var $this yii\web\View */
/* @var $model app\models\StaticLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'static_id' )->dropDownList( ArrayHelper::map(StaticPage::find()->all(), 'id', 'title' ), ['prompt'=>'']  ) ?>

    <?= $form->field($model, 'lang_id' )->dropDownList( ArrayHelper::map(Lang::find()->all(), 'id', 'name' ) ) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field( $model, 'text' )->widget( CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions( [ 'elfinder', 'path' => 'Global' ], [
                'preset' => 'full',
                'inline' => false,
                'height' => '250'
            ]
        ),
    ] ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
