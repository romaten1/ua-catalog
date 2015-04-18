<?php

use app\components\productWidget\ProductWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo ProductWidget::widget(['category_id' => $category_id, 'type_category' => 'third']); ?>

