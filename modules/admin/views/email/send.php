<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Send Emails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        Розсилання електронних листів для всіх підписчиків.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field( $model, 'body' )->widget( CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions( [ 'elfinder', 'path' => 'Global' ], [
                            'preset' => 'full',
                            'inline' => false,
                            'height' => '250'
                        ]
                    ),
                ] ); ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
