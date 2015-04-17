<div class="categories-container">
    <div class="wrapper">
        <?php
            printCategories( 0, $category_main, $category_second, $category_third, $manufacturers, $category_manufacturer );
            printCategories( 5, $category_main, $category_second, $category_third, $manufacturers, $category_manufacturer );
            printCategories( 9, $category_main, $category_second, $category_third, $manufacturers, $category_manufacturer );
        ?>
    </div>
</div>


<?php
/**
 * @param $start
 * @param $category_main
 * @param $category_second
 * @param $category_third
 * @param $manufacturers
 * @param $category_manufacturer
 */
function printCategories($start,
$category_main,
$category_second,
$category_third,
$manufacturers,
$category_manufacturer){
?>
<div class="categories">
    <?php
    for ($i = $start; $i < ( $start + 4 ); $i ++) {
        ?>
    <div class="categories-item <?= $i == 1 ? 'active' : ''; ?>">
        <a href="#" title="<?= $category_main[$i]['title']; ?>"
           class="<?= $category_main[$i]['class']; ?>">
            <?= $category_main[$i]['title']; ?>
        </a><!--
    			-->
        </div><?php } ?>
</div>

<?php for ($main_count = $start;
$main_count < ( $start + 4 );
$main_count ++) {
?>
<div
    class="sub-categories <?= $main_count == 1 ? 'active' : ''; ?>"
    id="<?= $category_main[$main_count]['class']; ?>">
    <?php
    foreach ($category_second as $second_item) {
        if ($second_item['parent_id'] == $category_main[$main_count]['id']) {
            ?>
            <div class="sub-categories-item"><span><?= $second_item['title']; ?></span>
                <ul class="sub-categories-lv1">
                    <?php
                    foreach ($category_third as $third_item) {
                        if ($third_item['parent_id'] == $second_item['id']) {
                            ?>
                            <li><a href="#"
                                   title="<?= $third_item['title']; ?>"><?= $third_item['title']; ?></a>
                                <ul class="sub-categories-lv2">
                                    <?php
                                    foreach ($category_manufacturer as $man) {
                                        if ($man['category_id'] == $third_item['id']) {
                                            foreach ($manufacturers as $item) {
                                                if ($man['manufacturer_id'] == $item['id']) {
                                                    echo "<li><a href=\"#\" title=\"" . $item['title'] . "\"></a>" . $item['title'] . "</li>";
                                                }
                                            }
                                            ?>
                                        <?php
                                        }
                                    } ?>
                                </ul>
                            </li>
                        <?php
                        }
                    } ?>
                </ul>
            </div>

        <?php
        }
    }
    echo '</div>';
    }
    }?>


