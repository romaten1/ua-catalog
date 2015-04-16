<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category_lang".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $lang_id
 * @property string $title
 */
class CategoryLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'lang_id', 'title'], 'required'],
            [['category_id', 'lang_id'], 'integer'],
            [['title'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Категорія'),
            'lang_id' => Yii::t('app', 'Мова'),
            'title' => Yii::t('app', 'Назва'),
        ];
    }
}
