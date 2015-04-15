<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Postsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = Yii::t( 'app', 'Блог' );
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">
        <h1><?= Html::encode( $this->title ) ?></h1>

        <div class="flex-container">
            <?= $this->render( '_listitem', [
                'model' => $model,
            ] ); ?>
        </div>
    </div>
</section>

