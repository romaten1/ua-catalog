<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title                   = $model->title;
$this->params['breadcrumbs'][] = [ 'label' => Yii::t( 'app', 'News' ), 'url' => [ 'index' ] ];
$this->params['breadcrumbs'][] = $this->title;
?>


    <section class="blog-content">
        <div class="wrapper">
            <h1><?= Html::encode( $this->title ) ?></h1>
            <?= Html::img( '@web/uploads/news/' . $model->image ) ?><br/><br/>
            <?php echo $model->content->text; ?><br/>

        </div>
    </section>


