<?php
use app\components\filterWidget\FilterWidget;
use app\models\CategorySecond;
use app\models\CategoryThird;
use yii\helpers\Html;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
if($type_category == 'second'){
    $category = CategorySecond::findOne($category_id);
    $title = $category->title;
}
if($type_category == 'third'){
    $category = CategoryThird::findOne($category_id);
    $title = $category->title;
}
?>
<div class="katalog">
    <?php echo FilterWidget::widget(['title' => $title]); ?>

    <div class="katalog-content">
        <div class="breadcrumbs">
            <a href="#" title="Одяг">Одяг</a> >
            <?php if($type_category == 'manufacturer'){
                Html::a($category->title, ['/category-third/view']);
            }
            ?>
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