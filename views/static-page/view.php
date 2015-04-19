<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaticPage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">
        <h1><?= Html::encode( $this->title ) ?></h1>
        <?php echo $model->content->text; ?><br/>

    </div>
</section>
