<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

?>
<li class="UAkatalog-link"><a href="#" title="Каталог"><?= Yii::t( 'app', 'Каталог' ) ?></a>
    <ul class="sub-menu-lv1">
        <?php
        foreach ($category_main as $main) {
            ?>
            <li class="main_category"><a href="<?= Url::to( [ '/category/view', 'id' => $main->id ] ); ?>"
                                                  title="<?= $main->getCatTitle(); ?>"><?= $main->getCatTitle(); ?></a>
                <ul class="sub-menu-lv2">
                    <?php
                    foreach ($category_second as $second) {
                        if ($second['parent_id'] == $main->id) {
                            ?>
                            <li class="personal-main_category"><a
                                    href="<?= Url::to( [ '/category-second/view', 'id' => $second->id ] ); ?>"
                                    title="<?= $second->title; ?>"><?= $second->getCatTitle(); ?></a>
                                <ul class="sub-menu-lv3">
                                    <?php
                                    foreach ($category_third as $third){
                                    if ($third->parent_id == $second->id) {
                                    ?>
                                    <li class="personal-hygiene"><a
                                            href="<?= Url::to( [ '/category-third/view', 'id' => $third['id'] ] ); ?>"
                                            title="<?= $third->getCatTitle(); ?>"><?= $third->getCatTitle(); ?></a>
                                        <?php
                                        }
                                        } ?>
                                </ul>
                            </li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</li>