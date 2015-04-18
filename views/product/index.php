<?php

use app\components\filterWidget\FilterWidget;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="katalog">
    <?php echo FilterWidget::widget(); ?>

    <div class="katalog-content">
        <div class="breadcrumbs">
            <a href="#" title="Одяг">Одяг</a> >
            <a href="#" title="Жіночий одяг">Жіночий одяг</a>
        </div>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{items}{paginator}',
            'itemOptions' => ['class' => 'katalog-content-item'],
            'itemView' => '_listItem',
        ]) ?>

    </div>
  </div>
</div>
