<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "manufacturer_lang".
 *
 * @property integer $id
 * @property integer $manufacturer_id
 * @property integer $lang_id
 * @property string $title
 * @property string $description
 */
class ManufacturerLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacturer_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer_id', 'lang_id', 'title', 'description'], 'required'],
            [['id', 'manufacturer_id', 'lang_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'manufacturer_id' => Yii::t('app', 'Виробник'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
            'description' => Yii::t('app', 'Опис'),
        ];
    }
}
