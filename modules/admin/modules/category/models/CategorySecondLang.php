<?php

namespace app\modules\admin\modules\category\models;

use Yii;

/**
 * This is the model class for table "category_second_lang".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $lang_id
 * @property string $title
 */
class CategorySecondLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_second_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'lang_id', 'title'], 'required'],
            [['id', 'category_id', 'lang_id'], 'integer'],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'lang_id' => Yii::t('app', 'Lang ID'),
            'title' => Yii::t('app', 'Title'),
        ];
    }
}
