<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "lang".
 *
 * @property integer $id
 * @property string $url
 * @property string $local
 * @property string $name
 * @property integer $default
 * @property integer $date_update
 * @property integer $date_create
 */
class Lang extends ActiveRecord
{
    //Переменная, для хранения текущего объекта языка
    static $current = null;

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'      => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => [ 'date_create', 'date_update' ],
                    ActiveRecord::EVENT_BEFORE_UPDATE => [ 'date_update' ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'url', 'local', 'name', 'date_update', 'date_create' ], 'required' ],
            [ [ 'default', 'date_update', 'date_create' ], 'integer' ],
            [ [ 'url', 'local', 'name' ], 'string', 'max' => 255 ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'          => Yii::t( 'app', 'ID' ),
            'url'         => Yii::t( 'app', 'Як відображається в стрічці пошуку' ),
            'local'       => Yii::t( 'app', 'Локаль' ),
            'name'        => Yii::t( 'app', 'Назва' ),
            'default'     => Yii::t( 'app', 'Основна чи другорядна' ),
            'date_update' => Yii::t( 'app', 'Дата оновлення' ),
            'date_create' => Yii::t( 'app', 'Дата стоврення' ),
        ];
    }


    /**
     * Получение текущего объекта языка
     *
     * @return array|null|ActiveRecord
     */
    static function getCurrent()
    {
        if (self::$current === null) {
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    /**
     * Установка текущего объекта языка и локаль пользователя
     *
     * @param null $url
     */
    static function setCurrent( $url = null )
    {
        $language           = self::getLangByUrl( $url );
        self::$current      = ( $language === null ) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->local;
    }

    /**
     * Получения объекта языка по умолчанию
     *
     * @return array|null|ActiveRecord
     */
    static function getDefaultLang()
    {
        return Lang::find()->where( '`default` = :default', [ ':default' => 1 ] )->one();
    }

    /**
     * Получения объекта языка по буквенному идентификатору
     *
     * @param null $url
     *
     * @return array|null|ActiveRecord
     */
    static function getLangByUrl( $url = null )
    {
        if ($url === null) {
            return null;
        } else {
            $language = Lang::find()->where( 'url = :url', [ ':url' => $url ] )->one();
            if ($language === null) {
                return null;
            } else {
                return $language;
            }
        }
    }
}
