<?php
namespace app\helpers;

use Yii;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Gd\Imagine;
use Imagine\Image\ImageInterface;
/**
 * Данный класс позволяет переводить строку с крилицы на латынь.
 */
class FileHelper
{
        public static function Size2Str($size) 
		{ 
		    $kb = 1024; 
		    $mb = 1024 * $kb; 
		    $gb = 1024 * $mb; 
		    $tb = 1024 * $gb; 
		  
		    if ($size < $kb) { 
		        return $size.' байт'; 
		    } else if ($size < $mb) { 
		        return round($size / $kb, 2).' Кб'; 
		    } else if ($size < $gb) {   
		        return round($size / $mb, 2).' Мб'; 
		    } else if ($size < $tb) { 
		        return round($size / $gb, 2).' Гб'; 
		    } else { 
		        return round($size / $tb, 2).' Тб'; 
		    } 
		}

    /**
     * @param $model
     * @param $type
     * @param int $image_desired_width
     * @param int $thumb_desired_width
     *
     * @return mixed
     */
    public static function makeImage($model, $type, $old_image = null, $image_desired_width = 900, $thumb_desired_width = 275)
    {
        if (isset( $model->image )) {
            $image_name      = Yii::$app->getSecurity()->generateRandomString( 5 )
                               . '_' . substr( TransliterateHelper::cyrillicToLatin( $model->title ), 0, 7 );
            $image_full_name = $image_name . '.' . $model->image->extension;
            $model->image->saveAs( Yii::getAlias( '@webroot/uploads/' . $type .'/' . $image_full_name ) );
            $model->image = $image_full_name;
            //Make a thumbnails
            $path_from = Yii::getAlias( '@webroot/uploads/' . $type .'/' . $image_full_name );
            $path_to   = Yii::getAlias( '@webroot/uploads/' . $type .'/thumbs/thumb_' ) . $image_full_name;
            self::imageHelp( $path_from, $path_to, $thumb_desired_width );
            //Make an image
            $path_from = Yii::getAlias( '@webroot/uploads/' . $type .'/' . $image_full_name );
            $path_to   = Yii::getAlias( '@webroot/uploads/' . $type .'/' ) . $image_full_name;
            self::imageHelp( $path_from, $path_to, $image_desired_width );
        } else {
            if($old_image){
                $model->image = $old_image;
            }else{
                $model->image = false;
            }
        }
        return $model;
    }
    /**
     * @param $path_from
     * @param $path_to
     * @param $desired_width
     */
    public static function imageHelp( $path_from, $path_to, $desired_width )
    {
        $imagine       = new Imagine();
        $image         = $imagine->open( $path_from );
        $image_size    = $image->getSize();
        $image_height  = $image_size->getHeight();
        $image_width   = $image_size->getWidth();
        $ratio         = $image_width / $desired_width;
        $resizedHeight = $image_height / $ratio;
        $resizedWidth  = $image_width / $ratio;
        $resized_image = $image->resize( new Box( $resizedWidth, $resizedHeight ) );
        $options       = [
            'resolution-units' => ImageInterface::RESOLUTION_PIXELSPERINCH,
            'resolution-x'     => 275,
            'flatten'          => false
        ];
        $resized_image->save( $path_to, $options );
    }


}