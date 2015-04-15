<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title                   = $model->title;
$this->params['breadcrumbs'][] = [ 'label' => Yii::t( 'app', 'Posts' ), 'url' => [ 'index' ] ];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">
        <h1><?= Html::encode( $this->title ) ?></h1>

        <?= DetailView::widget( [
            'model'      => $model,
            'attributes' => [
                'id',
                'title',
                'text:ntext',
                'image',
                'author_id',
                'status',
                'updated_at',
                'created_at',
            ],
        ] ) ?>
    </div>
</section>
