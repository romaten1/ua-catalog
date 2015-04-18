<?php

namespace app\models;

use app\models\query\EventQuery;
use app\modules\admin\models\EventLang;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $date
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Event extends Root
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
        return 'event';
    }

    /**
     * @return \app\models\query\EventQuery|\yii\db\ActiveQuery
     */
    public static function find()
    {
        return new EventQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'date', 'status'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'date'], 'string', 'max' => 255]
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
            'date' => Yii::t('app', 'Дата проведення'),
            'status' => Yii::t('app', 'Опубліковано'),
            'created_at' => Yii::t('app', 'Створено'),
            'updated_at' => Yii::t('app', 'Оновлено'),
        ];
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
        $is_translate = EventLang::find()->where(['event_id' => $this->id, 'lang_id' => $lang_id ])->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if(!$is_translate){
            $result = $this->hasOne(EventLang::className(), ['event_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => Lang::getDefaultLang()->id]);
        }else{
            // Якщо є переклад - виводимо його
            $result = $this->hasOne(EventLang::className(), ['event_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
        }
        return $result;
    }
}
