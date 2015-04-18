<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "slider_up".
 *
 * @property integer $id
 * @property string $image
 * @property integer $title
 */
class SliderUp extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider_up';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'title'], 'required'],
            [['title'], 'integer'],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Фото'),
            'title' => Yii::t('app', 'Назва'),
        ];
    }
}
