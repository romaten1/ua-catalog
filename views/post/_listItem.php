<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;

$i = 2;
foreach($model as $post){
   if($i%2 == 0){
     echo '<div class="blog-column">';
   }
?>
<div class="blog-column-item">
        <?= $post->image ? Html::img( '@web/uploads/post/thumbs/thumb_' . $post->image) :
            Html::img( '@web/img/blog_item_1.jpg' )
        ?>
        <div class="text-head"><?= $post->content->title; ?>
        </div>
        <p class="text"><?= StringHelper::truncateWords( $post->content->text, 40 ); ?>
        <?= Html::a( 'далі >', [ 'view', 'id' => $post->id ], [ 'class' => 'read-more' ] ) ?></p>
</div>


<?php
    if($i%2 != 0){
        echo '<span class="spinner"> </span></div>';
    }
    $i++;
}