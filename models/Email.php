<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
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
    public function behaviors()
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ]
            ],
        ];
    }
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
            [['email'], 'required'],
            [['created_at', 'time_token'], 'integer'],
            [['email'], 'email'],
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


    /**
     * @param $email_id
     * @param $hash
     *
     * @throws \Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function validateToken($email_id, $hash)
    {
        $model = Email::find($email_id)->one();

        if (Yii::$app->getSecurity()->validatePassword($model->email . 'salt', $hash)) {
            $model->delete();
        }
    }

    /**
     * @param $email_id
     *
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     * @internal param $email
     *
     */
    public function createToken($email_id)
    {
        $model = Email::find($email_id)->one();

        $model->token = Yii::$app->getSecurity()->generatePasswordHash($model->email . 'salt');

        $model->save();

    }
}
