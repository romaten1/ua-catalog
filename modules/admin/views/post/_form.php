<?php

use app\models\Post;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin( [
        'options' => [ 'enctype' => 'multipart/form-data' ] // important
    ] ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <? if ( ! empty( $model->image )) {
        echo Html::img( '@web/uploads/post/' . $model->image );
    } ?>

    <?= $form->field( $model, 'image' )->fileInput() ?>

    <?= $form->field( $model, 'status' )->dropDownList( Post::getStatusArray() ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
