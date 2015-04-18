<?php

use app\models\Event;
use app\models\Lang;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EventLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id' )->dropDownList( ArrayHelper::map(Event::find()->all(), 'id', 'title' ), ['prompt'=>'Виберіть']  ) ?>

    <?= $form->field($model, 'lang_id' )->dropDownList( ArrayHelper::map(Lang::find()->all(), 'id', 'name' ) ) ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field( $model, 'description' )->widget( CKEditor::className(), [
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
