<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id
 * @property string $title
 * @property string $sity
 * @property string $address
 * @property integer $created_at
 * @property integer $updated_at
 */
class Shop extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'sity', 'address'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'sity', 'address'], 'string', 'max' => 255]
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
            'sity' => Yii::t('app', 'Місто'),
            'address' => Yii::t('app', 'Адреса'),
            'created_at' => Yii::t('app', 'Створено'),
            'updated_at' => Yii::t('app', 'Оновлено'),
        ];
    }
    /**
     * @return array
     */
    public static function getSityArray()
    {
        $shops = new self;
        $shops = $shops->find()->asArray()->all();
        $sities = [];
        foreach($shops as $item){
            $sity = $item['sity'];
            $sities[$sity] = $sity;
        }
        return array_unique($sities);
    }



}
