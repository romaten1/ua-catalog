<?php

use app\models\Lang;
use dektrium\user\models\User;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title                   = $model->content->title;
$this->params['breadcrumbs'][] = [ 'label' => Yii::t( 'app', 'Posts' ), 'url' => [ 'index' ] ];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-content">
    <div class="wrapper">
        <h1><?= Html::encode( $this->title ) ?></h1>
        <?= $model->image ? Html::img( '@web/uploads/post/' . $model->image) :
            Html::img( '@web/img/blog_item_1.jpg' )
        ?>
        <?php echo $model->content->text; ?><br />
        <?php echo 'Опублікував: ' . User::findOne($model->author_id)->username . ' / ' . date('d-m-Y', $model->updated_at); ?><br />

    </div>
</section>
