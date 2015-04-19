<?php
/* @var $this yii\web\View */
use app\components\blogWidget\BlogWidget;
use app\components\categoryWidget\CategoryWidget;
use app\components\filterWidget\FilterWidget;
use app\components\productWidget\ProductWidget;
use app\components\searchWidget\SearchWidget;
use app\modules\admin\models\SliderUp;
use yii\helpers\Html;

$this->title = 'UA каталог';
?>
<div class="container-main">
    <div class="slider" id="slider-image">
        <div class="slider-content">
            <div class="slider-content-item">
                <?php $sliders = SliderUp::find()->asArray()->all();
                foreach($sliders as $item){
                    echo Html::img('/uploads/slider-up/' . $item['image']);
                }
                ?>
            </div>
        </div>
        <div class="slider-nav">
            <ul class="switchers">
                <li><a href="#" title="slide-nav" class="active"> </a></li>
                <!--
                                -->
                <li><a href="#" title="slide-nav"> </a></li>
                <!--
                                -->
                <li><a href="#" title="slide-nav"> </a></li>
            </ul>
        </div>
    </div>
    <?php echo SearchWidget::widget(); ?>
</div>
<div class="wrapper info">
    <p>Наразі купувати українські продукти та речі не тільки вигідно, а є вже правилом гарного тону.
        Українські виробники виробляють майже все: від колготок до танків, від іграшок до спортивного інвентарю.
    </p>

    <p>На сайті зібрано повний каталог українських виробників.
    </p>
</div>

<?php echo ProductWidget::widget(['category_id' => 5, 'type_category' => 'second']); ?>
<section class="slider-container">
    <div class="wrapper">
        <div class="slider-reviews" id="slider-reviews">

            <?php echo BlogWidget::widget(); ?>
            <div class="slider-reviews-nav">
                <ul class="switchers">
                    <li><a href="#" title="slide-nav" class="active"> </a></li>
                    <!--
                                            -->
                    <li><a href="#" title="slide-nav"> </a></li>
                    <!--
                                            -->
                    <li><a href="#" title="slide-nav"> </a></li>
                </ul>
                <a href="#" title="move-to-left" class="move-to-left"> </a>
                <a href="#" title="move-to-right" class="move-to-right"> </a>
            </div>
        </div>
    </div>
</section>
