<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_page".
 *
 * @property integer $id
 * @property string $title
 * @property integer $updated_at
 * @property integer $created_at
 * @property integer $status
 * @property integer $type
 */
class StaticPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'updated_at', 'created_at', 'status', 'type'], 'required'],
            [['updated_at', 'created_at', 'status', 'type'], 'integer'],
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
            'title' => Yii::t('app', 'Назва'),
            'updated_at' => Yii::t('app', 'Оновлено'),
            'created_at' => Yii::t('app', 'Створено'),
            'status' => Yii::t('app', 'Статус'),
            'type' => Yii::t('app', 'Тип сторінки'),
        ];
    }
}
