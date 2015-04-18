<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
?>


    <div class="katalog-head">
    <div class="wrapper">
        <span><?= $title; ?></span>
        <form action="<?= Url::to( [ '/product'] ); ?>" method="get">
        <label>
                Сортувати за:
                <select name="filter" id="filter">
                    <option value="date">Датою оновлення - від найновіших</option>
                    <option value="price-up">Ціною - спочатку найдешевші</option>
                    <option value="price-down">Ціною - спочатку найдорожчі</option>
                </select>
            </label>
            <label>
                Обрати регіон:
                <select name="region" id="region">
                    <?php foreach($region as $sity){
                        echo '<option value="' . $sity . '">' . $sity . '</option>';
                    }?>
                </select>
            </label>
            <?= Html::submitButton('Застосувати', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>

    </form>
    </div>
</div>
<div class="wrapper clearfix">
    <div class="filter">
        <form action="<?= Url::to( [ '/product'] ); ?>" method="get">
        <div class="type-of-product">
            <a href="#" title="Тип" class="active">Тип</a>
            <ul id="type-of-product" class="open">
                <li><label><input type="checkbox" name="costum"> Костюми</label></li>
                <li><label><input type="checkbox" name="costum1"> Піджаки</label></li>
                <li><label><input type="checkbox" name="costum2"> Светри і гольфи</label></li>
                <li><label><input type="checkbox" name="costum3"> Плаття</label></li>
                <li><label><input type="checkbox" name="costum4"> Спідниці</label></li>
                <li><label><input type="checkbox" name="costum5"> Брюки</label></li>
                <li><label><input type="checkbox" name="costum6"> Блузи</label></li>
                <li><label><input type="checkbox" name="costum7"> Білизна</label></li>
                <li><label><input type="checkbox" name="costum8"> Спортивний одяг</label></li>
            </ul>
        </div>
        <div class="price-range"><span>Ціновий діапазон</span>

            <div class="main-line">
                <div class="variable-line">
                    <span class="low-price">550</span>
                    <span class="high-price">7580</span>
                </div>
            </div>
        </div>
        <div class="brand">
            <a href="#" title="Бренд">Бренд</a>
            <ul id="brand">
                <li><label><input type="checkbox" name="brand1"> brand1</label></li>
                <li><label><input type="checkbox" name="brand2"> brand2</label></li>
                <li><label><input type="checkbox" name="brand3"> brand3</label></li>
            </ul>
        </div>
            <div class="form-group">
                <?= Html::submitButton('Застосувати', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
            </div>
        </form>
    </div>