<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();
?>
<div class="UA-brand">
    <div class="wrapper">
        <ul class="UA-brand-list">
            <?php
            $i = 0;
            foreach ($manufacturers as $item) {
                if ($item['image']) {
                    ?>
                    <li><a href="<?= Url::to( [ '/manufacturer/view',  'id' => $item['id'] ] ); ?>"
                           title="<?= $item['title']; ?>">
                            <img src="<?= '/uploads/manufacturer/' . $item['image']; ?>"
                                 alt="<?= $item['title']; ?>"></a></li>
                    <?php
                    if($i > 3) break;
                    $i ++;
                }
            } ?>
        </ul>
    </div>
</div>