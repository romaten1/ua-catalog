<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "post_lang".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $lang_id
 * @property string $title
 * @property string $text
 */
class PostLang extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'lang_id', 'title', 'text'], 'required'],
            [['id', 'post_id', 'lang_id'], 'integer'],
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
            'post_id' => Yii::t('app', 'Запис'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
            'text' => Yii::t('app', 'Текст'),
        ];
    }
}
