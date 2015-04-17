<?php

namespace app\models;

use app\modules\admin\models\ManufacturerLang;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "manufacturer".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $site
 * @property integer $updated_at
 * @property integer $created_at
 * @property integer $status
 */
class Manufacturer extends Root
{
    /**
     * @return array
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
        return 'manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'site', 'status'], 'required'],
            [['updated_at', 'created_at', 'status'], 'integer'],
            [['title', 'image','site',], 'string', 'max' => 255]
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
            'image' => Yii::t('app', 'Логотип'),
            'site' => Yii::t('app', 'Сайт виробника'),
            'updated_at' => Yii::t('app', 'Оновлено'),
            'created_at' => Yii::t('app', 'Створено'),
            'status' => Yii::t('app', 'Опубліковано'),
        ];
    }

    /**
     * @return array
     */
    public static function getManufacturersArray()
    {
        $group = self::find()->asArray()->all();
        $manufacturerArray = [];
        foreach ($group as $val) {
            $manufacturerArray[$val['id']] = $val['title'];
        }
        return $manufacturerArray;
    }

    /**
     * @param null $lang_id
     *
     * @return static
     */
    public function getContent($lang_id = null)
    {
        $lang_id = ($lang_id === null)? Lang::getCurrent()->id : $lang_id;
        // Для перевірки наявності перекладу поточною мовою
        $is_translate = ManufacturerLang::find()->where(['manufacturer_id' => $this->id, 'lang_id' => $lang_id ])->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if(!$is_translate){
            $result = $this->hasOne(ManufacturerLang::className(), ['manufacturer_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => Lang::getDefaultLang()->id]);
        }else{
            // Якщо є переклад - виводимо його
            $result = $this->hasOne(ManufacturerLang::className(), ['manufacturer_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
        }
        return $result;
    }

}
