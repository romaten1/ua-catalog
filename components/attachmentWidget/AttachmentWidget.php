<?php
namespace app\components\attachmentWidget;

use app\models\Manufacturer;
use app\modules\admin\models\Attachments;
use Yii;
use yii\base\Widget;

/**
 * Class CategoryWidget
 * @package app\components\categoryWidget
 */
class AttachmentWidget extends Widget
{
    public $product_id;

    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        $attachment = Attachments::find()->where(['product_id' => $this->product_id])->asArray()->all();

        return $this->render('attachment', [
            'attachment' => $attachment,
        ]);
    }
}
?>