<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;

?>
<div class="language">
    <?php foreach ($langs as $lang):?>
        <?= Html::a(StringHelper::truncate($lang->name, 3 ,''), '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) . ' | ' ?>
    <?php endforeach;?>
</div>