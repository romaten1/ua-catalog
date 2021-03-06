<?php
use app\models\CategoryThird;
use app\models\Product;
use kartik\slider\Slider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
?>


<div class="katalog-head">
    <div class="wrapper">
        <span><?= $title; ?></span>

        <form action="<?= Url::current(); ?>" method="get">
            <input type="hidden" name="id" value="<?= Yii::$app->request->queryParams['id']; ?>"/>
            <label>
                Сортувати за:
                <select name="filter" id="filter">
                <?php
                $options = [
                    'all' => 'Вибрати',
                    'date' => 'Датою оновлення - від найновіших',
                    'price-up' => 'Ціною - спочатку найдешевші',
                    'price-down' => 'Ціною - спочатку найдорожчі',
                    ];
                    foreach($options as $key => $value){
                    ?>
                    <option value="<?= $key; ?>"
                        <?php if(Yii::$app->request->queryParams['filter'] == $key) echo 'selected'; ?> ><?= $value; ?></option>
                    <?php } ?>
                </select>
            </label>
            <label>
                Обрати регіон:
                <select name="region" id="region">
                '<option value="all">Всі</option>';
                <?php foreach ($region as $sity) {
                    $selected = '';
                    if(Yii::$app->request->queryParams['region'] == $sity) $selected = 'selected';
                    echo '<option ' . $selected . ' value="' . $sity . '">' . $sity . '</option>';
                }?>
            </select>
            </label>
            <?= Html::submitButton( 'Застосувати', [ 'class' => 'btn btn-default', 'name' => 'contact-button' ] ) ?>

        </form>
    </div>
</div>
<div class="wrapper clearfix">
    <div class="filter">
        <form action="<?= Url::current(); ?>" method="get">
            <input type="hidden" name="id" value="<?= Yii::$app->request->queryParams['id']; ?>"/>
            <?php if ($category_type == 'second') {
                $items = CategoryThird::find()->where( [ 'parent_id' => $category_id ] )->all();
                ?>
                <div class="type-of-product">
                    <a href="#" title="Тип" class="active">Тип</a>
                    <ul id="type-of-product" class="open">
                        <?php foreach ($items as $item) {
                            $checked = '';
                            if(Yii::$app->request->queryParams['categoryThird'][$item->id] == 'on') $checked = 'checked="checked"';
                            ?>
                            <li><label><input type="checkbox" <?= $checked ?>
                                              name="categoryThird[<?= $item->id ?>]"> <?= $item->title ?></label></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }
            $isFrontpage = false;
            if ((Yii::$app->controller->id.'/'.\Yii::$app->controller->action->id) != 'site/index'  ) {
                $isFrontpage = true;
            }
            if($isFrontpage) {
                ?>

                <div class="price-range"><span>Ціновий діапазон</span>
                </div>
                <?php
                echo Slider::widget( [
                    'name'          => 'price',
                    'value'         => '0,' . Product::getMaxPrice(),
                    'sliderColor'   => Slider::TYPE_GREY,
                    'pluginOptions' => [
                        'min'   => 0,
                        'max'   => Product::getMaxPrice(),
                        'step'  => 10,
                        'range' => true
                    ],
                ] );
            }
            ?>


            <?php if ($category_type == 'third') {
            $items = CategoryThird::getManufacturers($category_id);
            ?>
            <div class="brand">
                <a href="#" title="Бренд">Бренд</a>
                <ul id="brand">
                    <?php foreach ($items as $item) { ?>
                        <li><label><input type="checkbox" name="manufacturer[<?= $item->id ?>]"> <?= $item->title ?></label></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
            <div class="form-group">
                <?= Html::submitButton( 'Застосувати', [ 'class' => 'btn btn-default', 'name' => 'contact-button' ] ) ?>
            </div>
        </form>
    </div>