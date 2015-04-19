<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;

?>
<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

        <!-- You can delete next ul.sidebar-menu. It's just demo. -->

        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Меню адміністратора</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Записи блогу</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/post')?>"><i class="fa fa-angle-double-right"></i>Перелік</a></li>
                    <li><a href="<?= Url::toRoute('/admin/post/create')?>"><i class="fa fa-angle-double-right"></i>Створити заготовку</a></li>
                    <li><a href="<?= Url::toRoute('/admin/post-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій записів</a></li>
                    <li><a href="<?= Url::toRoute('/admin/post-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію запису</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Товари</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/product')?>"><i class="fa fa-angle-double-right"></i>Перелік товарів</a></li>
                    <li><a href="<?= Url::toRoute('/admin/product/create')?>"><i class="fa fa-angle-double-right"></i>Створити товар</a></li>
                    <li><a href="<?= Url::toRoute('/admin/product-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій описів товарів</a></li>
                    <li><a href="<?= Url::toRoute('/admin/product-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію опису товару</a></li>
                    <li><a href="<?= Url::toRoute('/admin/shop-product')?>"><i class="fa fa-angle-double-right"></i>Перелік - в якому магазині продається товар</a></li>
                    <li><a href="<?= Url::toRoute('/admin/shop-product/create')?>"><i class="fa fa-angle-double-right"></i>Приписати товар до магазину</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-legal"></i>
                    <span>Додатки фото до товарів</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/attachments')?>"><i class="fa fa-angle-double-right"></i>Перелік фото</a></li>
                    <li><a href="<?= Url::toRoute('/admin/attachments/create')?>"><i class="fa fa-angle-double-right"></i>Створити фото-додаток</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-legal"></i>
                    <span>Виробники</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/manufacturer')?>"><i class="fa fa-angle-double-right"></i>Перелік виробників</a></li>
                    <li><a href="<?= Url::toRoute('/admin/manufacturer/create')?>"><i class="fa fa-angle-double-right"></i>Створити виробника</a></li>
                    <li><a href="<?= Url::toRoute('/admin/manufacturer-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій описів виробників</a></li>
                    <li><a href="<?= Url::toRoute('/admin/manufacturer-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію опису виробника</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sitemap"></i>
                    <span>Категорії</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/category/category')?>"><i class="fa fa-angle-double-right"></i>Основні категорії</a></li>
                    <li><a href="<?= Url::toRoute('/admin/category/category-second')?>"><i class="fa fa-angle-double-right"></i>Категорії другого рівня</a></li>
                    <li><a href="<?= Url::toRoute('/admin/category/category-third')?>"><i class="fa fa-angle-double-right"></i>Категорії третього рівня</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="<?= Url::toRoute('/admin/collection')?>">
                    <i class="fa fa-shopping-cart"></i> <span>Колекції користувачів</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-paper-plane"></i>
                    <span>Електронні адреси для розсилки</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/email')?>"><i class="fa fa-angle-double-right"></i>Перелік електронних пошт</a></li>
                    <li><a href="<?= Url::toRoute('/admin/email/create')?>"><i class="fa fa-angle-double-right"></i>Внести електронну пошту в перелік</a></li>
                    <li><a href="<?= Url::toRoute('/admin/email/send-email')?>"><i class="fa fa-angle-double-right"></i>Розіслати пошту підписникам</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Новини</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/news')?>"><i class="fa fa-angle-double-right"></i>Перелік новин</a></li>
                    <li><a href="<?= Url::toRoute('/admin/news/create')?>"><i class="fa fa-angle-double-right"></i>Створити новину</a></li>
                    <li><a href="<?= Url::toRoute('/admin/news-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій описів новин</a></li>
                    <li><a href="<?= Url::toRoute('/admin/news-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію опису новини</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Події</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/event')?>"><i class="fa fa-angle-double-right"></i>Перелік подій</a></li>
                    <li><a href="<?= Url::toRoute('/admin/event/create')?>"><i class="fa fa-angle-double-right"></i>Створити подію</a></li>
                    <li><a href="<?= Url::toRoute('/admin/event-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій описів подій</a></li>
                    <li><a href="<?= Url::toRoute('/admin/event-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію опису події</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-paper-plane"></i>
                    <span>Основний слайдер</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/slider-up')?>"><i class="fa fa-angle-double-right"></i>перелік слайдів</a></li>
                    <li><a href="<?= Url::toRoute('/admin/slider-up/create')?>"><i class="fa fa-angle-double-right"></i>Створити слайд</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-thumbs-up"></i>
                    <span>Магазини</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/shop')?>"><i class="fa fa-angle-double-right"></i>Перелік магазинів</a></li>
                    <li><a href="<?= Url::toRoute('/admin/shop/create')?>"><i class="fa fa-angle-double-right"></i>Створити магазин</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bookmark-o"></i>
                    <span>Статичні сторінки</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/admin/static-page')?>"><i class="fa fa-angle-double-right"></i>Перелік статичних сторінок</a></li>
                    <li><a href="<?= Url::toRoute('/admin/static-page/create')?>"><i class="fa fa-angle-double-right"></i>Створити статичну сторінку</a></li>
                    <li><a href="<?= Url::toRoute('/admin/static-lang')?>"><i class="fa fa-angle-double-right"></i>Перелік мовних версій описів статичних сторінок</a></li>
                    <li><a href="<?= Url::toRoute('/admin/static-lang/create')?>"><i class="fa fa-angle-double-right"></i>Створити мовну версію опису статичної сторінки</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= Url::toRoute('/user/admin/index')?>">
                    <i class="fa fa-user"></i> <span>Користувачі</span>
                </a>
            </li>
        </ul>

    </section>

</aside>
