<?php

use app\components\productWidget\ProductWidget;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CategorySecond */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Seconds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo ProductWidget::widget(['category_id' => $category_id, 'type_category' => 'second']); ?>
