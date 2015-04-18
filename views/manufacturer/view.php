<?php

use app\components\manProductWidget\ManProductWidget;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacturer */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Manufacturers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <section class="product-page">
        <div class="wrapper">
            <h1><?= Html::encode( $this->title ) ?></h1>
            <?= Html::img( '@web/uploads/manufacturer/' . $model->image)   ?><br /><br />
            <?= Html::a($model->site, $model->site) ?><br />
            <?php echo $model->content->description; ?><br />

        <div class="such-brand-head">Інші товари виробника <?= $model->title ?></div>
        <div class="such-brand">
            <?= ManProductWidget::Widget(['manufacturer_id' => $model->id]) ?>
        </div>
        </div>
    </section>


