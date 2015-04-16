<?php

namespace app\models;

use app\modules\admin\models\StaticLang;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

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
class StaticPage extends Root
{
    const TYPE_ABOUT = 0;
    const TYPE_MANUFACTURER = 1;
    const TYPE_USER = 2;

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
        return 'static_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'status', 'type'], 'required'],
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
    /**
     * @param null $lang_id
     *
     * @return static
     */
    public function getContent($lang_id = null)
    {
        $lang_id = ($lang_id === null)? Lang::getCurrent()->id : $lang_id;

        return $this->hasOne(StaticLang::className(), ['static_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
    }
    /**
     * @return array
     */
    public static function getTypeArray()
    {
        return [
            self::TYPE_ABOUT => 'Про нас',
            self::TYPE_MANUFACTURER => 'Виробникам',
            self::TYPE_USER => 'Користувачам'

        ];
    }
    /**
     * @return string
     */
    public function getTypeLabel()
    {
        $types = $this->getStatusArray();
        if($this->type == self::TYPE_USER ){
            $return = '<span class="label label-success">'.ArrayHelper::getValue($types, $this->type).'</span>';
        }
        elseif($this->type == self::TYPE_MANUFACTURER) {
            $return = '<span class="label label-warning">'.ArrayHelper::getValue($types, $this->type).'</span>';
        }
        else {
            $return = '<span class="label label-info">'.ArrayHelper::getValue($types, $this->type).'</span>';
        }
        return $return;
    }

    /**
     * @param $type
     *
     * @internal param $status
     *
     * @return mixed
     */
    public static function getType($type)
    {
        $array = self::getTypeArray();
        return $array[$type];
    }

}
