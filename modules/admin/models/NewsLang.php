<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news_lang".
 *
 * @property integer $id
 * @property integer $news_id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 */
class NewsLang extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_id', 'lang_id', 'title', 'text'], 'required'],
            [['news_id', 'lang_id'], 'integer'],
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
            'news_id' => Yii::t('app', 'Новина'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
            'text' => Yii::t('app', 'Текст'),
        ];
    }
}
