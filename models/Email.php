<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "email".
 *
 * @property integer $id
 * @property string $email
 * @property integer $created_at
 * @property string $token
 * @property integer $time-token
 */
class Email extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'created_at', 'token', 'time_token'], 'required'],
            [['created_at', 'time_token'], 'integer'],
            [['email', 'token'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'email'),
            'created_at' => Yii::t('app', 'Створено'),
            'token' => Yii::t('app', 'Запит на видалення з підписки'),
            'time_token' => Yii::t('app', 'Час запиту на видалення з підписки'),
        ];
    }
}
