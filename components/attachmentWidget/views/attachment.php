<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

//yii\helpers\VarDumper::dump($category_manufacturers); die();

foreach($attachment as $item){
?>
<li><a href="#" title="product_foto"><img src="<?= '/uploads/attachments/thumbs/thumb_' . $item['image'] ?>" alt="product_foto"></a></li>
<?php }