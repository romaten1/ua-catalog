<?php
/* @var $this yii\web\View */
use app\components\blogWidget\BlogWidget;
use app\components\categoryWidget\CategoryWidget;
use app\components\filterWidget\FilterWidget;
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

<?php echo CategoryWidget::widget(); ?>

<div class="katalog">
    <?php echo FilterWidget::widget(); ?>

        <div class="katalog-content">
            <div class="breadcrumbs">
                <a href="#" title="Одяг">Одяг</a> >
                <a href="#" title="Жіночий одяг">Жіночий одяг</a>
            </div>
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_1.jpg" alt="item_1"></a>

                <div class="item-label">новий
                </div>
                <a href="#" title="Платье на пуговицах" class="item-info">Платье на пуговицах</a>
                <a href="#" title="Grâce à vous" class="item-brand">Grâce à vous</a>

                <div class="price-container clearfix">
                    <span class="item-price">1 450,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <!--
                            -->
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_2.jpg" alt="item_2"></a>

                <div class="item-label">новий
                </div>
                <a href="#" title="Блузка шифон" class="item-info">Блузка шифон</a>
                <a href="#" title="Cat Orange" class="item-brand">Cat Orange</a>

                <div class="price-container clearfix">
                    <span class="item-price">580,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <!--
                            -->
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_3.jpg" alt="item_3"></a>

                <div class="item-label">новий
                </div>
                <a href="#" title="Платья 886&amp;103" class="item-info">Платья 886&amp;103</a>
                <a href="#" title="Alve" class="item-brand">Alve</a>

                <div class="price-container clearfix">
                    <span class="item-price">890,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <!--
                            -->
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_4.jpg" alt="item_4"></a>

                <div class="item-label">новий
                </div>
                <a href="#" title="Футболка женская PATRIOT" class="item-info">Футболка женская PATRIOT</a>
                <a href="#" title="Одежда с символикой Украины" class="item-brand">Одежда с символикой Украины</a>

                <div class="price-container clearfix">
                    <span class="item-price">230,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <!--
                            -->
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_5.jpg" alt="item_5"></a>
                <a href="#" title="Жупан короткий з відктритими швами" class="item-info">Жупан короткий з відктритими
                    швами</a>
                <a href="#" title="Отаман" class="item-brand">Отаман</a>

                <div class="price-container clearfix">
                    <span class="item-price">6700,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <!--
                            -->
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_6.jpg" alt="item_6"></a>
                <a href="#" title="Вишиванка батистова з поясом" class="item-info">Вишиванка батистова з поясом</a>
                <a href="#" title="Отаман" class="item-brand">Отаман</a>

                <div class="price-container clearfix">
                    <span class="item-price">3400,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <div class="paginator">
                <a href="#" title="В начало" class="pag-to-first"> </a>
                <a href="#" title="Назад" class="pag-to-back"> </a>
                <a href="#" title="Перейти на 1 страницу">1</a>
                <a href="#" title="Перейти на 2 страницу">2</a>
                <a href="#" title="Перейти на 3 страницу">3</a>
                <a href="#" title="Перейти на 4 страницу">4</a>
                <a href="#" title="Перейти на 5 страницу">5</a>
                <a href="#" title="Перейти на 6 страницу">6</a>
                <a href="#" title="Перейти на 7 страницу">7</a>
                <span>...</span>
                <a href="#" title="Перейти на 8 страницу">28</a>
                <a href="#" title="Вперед" class="pag-to-next"> </a>
                <a href="#" title="В конец" class="pag-to-last"> </a>
            </div>
        </div>
    </div>
</div>
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
