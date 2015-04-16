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
            <li>
                <a href="<?= Url::toRoute('/user/admin/index')?>">
                    <i class="fa fa-user"></i> <span>Користувачі</span>
                </a>
            </li>
        </ul>

    </section>

</aside>
