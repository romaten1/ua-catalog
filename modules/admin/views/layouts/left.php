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
                    <li><a href="<?= Url::toRoute('/admin/post/create')?>"><i class="fa fa-angle-double-right"></i>Створити</a></li>
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
