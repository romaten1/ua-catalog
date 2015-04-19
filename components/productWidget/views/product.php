<?php
use app\components\categoryWidget\CategoryWidget;
use app\components\filterWidget\FilterWidget;
use app\models\Category;
use app\models\CategorySecond;
use app\models\CategoryThird;
use yii\helpers\Html;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
switch ($type_category) {
    case 'first':
        $category    = Category::findOne( $category_id );
        $title       = $category->title;
        $breadcrumbs = $title;
        break;
    case 'second':
        $category    = CategorySecond::findOne( $category_id );
        $title       = $category->title;
        $breadcrumbs = CategorySecond::getBreadcrumbs( $category_id );
        ?>

        <?php break;
    case 'third':
        $category    = CategoryThird::findOne( $category_id );
        $title       = $category->title;
        $breadcrumbs = CategoryThird::getBreadcrumbs( $category_id );
        break;
    default:
        break;
}
?>
<?php echo CategoryWidget::widget(); ?>
<div class="katalog">
    <?php echo FilterWidget::widget( [
        'title' => $title,
        'category_id' => $category_id,
        'category_type' => $type_category,
    ] ); ?>

    <div class="katalog-content">
        <div class="breadcrumbs">
            <?= $breadcrumbs; ?>
        </div>
        <?= ListView::widget( [
            'dataProvider' => $dataProvider,
            'layout'       => '{items}{pager}',
            'itemOptions'  => [ 'class' => 'katalog-content-item' ],
            'itemView'     => '_listItem',
            'pager' => [
                'options' => ['class' => 'paginator'],
                'firstPageCssClass' => 'pag-to-first',
                'nextPageCssClass' => 'pag-to-next',
                'prevPageCssClass' => 'pag-to-back'
            ]

        ] ) ?>

    </div>
</div>
</div>
