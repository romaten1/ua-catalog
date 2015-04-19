<?php

use app\components\productWidget\ProductWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo ProductWidget::widget(['category_id' => $category_id, 'type_category' => 'first']); ?>
