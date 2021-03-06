<?php

namespace app\models;

use app\models\query\PostQuery;
use app\modules\admin\models\PostLang;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property integer $author_id
 * @property integer $status
 * @property integer $updated_at
 * @property integer $created_at
 */
class Post extends Root
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @return PostQuery
     */
    public static function find()
    {
        return new PostQuery(get_called_class());
    }

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
    public function rules()
    {
        return [
            [['title', 'author_id'], 'required'],
            [['author_id', 'status', 'updated_at', 'created_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Назва українською'),
            'image' => Yii::t('app', 'Фотографія'),
            'author_id' => Yii::t('app', 'Автор'),
            'status' => Yii::t('app', 'Опубліковано'),
            'updated_at' => Yii::t('app', 'Оновлено'),
            'created_at' => Yii::t('app', 'Створено'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @param null $lang_id
     *
     * @return static
     */
    public function getContent($lang_id = null)
    {
        $lang_id = ($lang_id === null)? Lang::getCurrent()->id : $lang_id;
        // Для перевырки наявності перекладу поточною мовою
        $is_translate = PostLang::find()->where(['post_id' => $this->id, 'lang_id' => $lang_id ])->one();
        // Якщо немає перекладу для поточної мови - отримуємо дані для мови, встановленої по замовчуванню
        if(!$is_translate){
            $result = $this->hasOne(PostLang::className(), ['post_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => Lang::getDefaultLang()->id]);
        }else{
            // Якщо є переклад - виводимо його
            $result = $this->hasOne(PostLang::className(), ['post_id' => 'id'])->where('lang_id = :lang_id', [':lang_id' => $lang_id]);
        }
        return $result;
    }
}
