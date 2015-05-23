<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="container-main">
    <div class="slider" id="slider-image">
        <div class="slider-content">
            <div class="slider-content-item">
                <img src="/img/slider.jpg" alt="slide-first">
            </div>
        </div>
        <div class="slider-nav">
            <ul class="switchers">
                <li><a href="#" title="slide-nav" class="active"> </a></li><!--
    			--><li><a href="#" title="slide-nav"> </a></li><!--
    			--><li><a href="#" title="slide-nav"> </a></li>
            </ul>
        </div>
    </div>
    <div class="search-block">
        <div class="search-block-container">
            <div class="search-head">
                Повний каталог українських виробників
            </div>
            <form action="index.php" method="post">
                <input type="text" name="search" placeholder="Назва товару"><!--
    			--><input type="submit" name="search-buton" value=" ">
            </form>
        </div>
    </div>
</div>
<div class="site-error">

    <section class="content-404">
        <div class="wrapper">
            <h1 class="title-404">404</h1>
            <p class="subtitle-404">ОЙ, така сторінка покищо не існує.</p>
            <a href="#" title="Перейти до каталогу" class="button-404">Перейти до каталогу</a>
        </div>
    </section>

</div>
