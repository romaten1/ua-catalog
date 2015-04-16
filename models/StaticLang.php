<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_lang".
 *
 * @property integer $id
 * @property integer $static_id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 */
class StaticLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['static_id', 'lang_id', 'title', 'text'], 'required'],
            [['static_id', 'lang_id'], 'integer'],
            [['text'], 'string'],
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
            'static_id' => Yii::t('app', 'Статична сторінка'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
            'text' => Yii::t('app', 'Текст'),
        ];
    }
}
