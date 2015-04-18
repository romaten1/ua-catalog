<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "event_lang".
 *
 * @property integer $id
 * @property integer $event_id
 * @property integer $lang_id
 * @property string $title
 * @property string $description
 */
class EventLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'lang_id', 'title', 'description'], 'required'],
            [['event_id', 'lang_id'], 'integer'],
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
            'event_id' => Yii::t('app', 'Подія'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
            'description' => Yii::t('app', 'Опис'),
        ];
    }
}
