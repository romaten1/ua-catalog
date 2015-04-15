<?php

namespace app\models;

use app\models\query\PostQuery;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use trntv\filekit\behaviors\UploadBehavior;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property integer $author_id
 * @property integer $status
 * @property integer $updated_at
 * @property integer $created_at
 */
class Post extends ActiveRecord
{
    const STATUS_PUBLISHED = 1;
    const STATUS_DRAFT = 0;

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
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'image',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'author_id'], 'required'],
            [['text'], 'string'],
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
            'title' => Yii::t('app', 'Назва'),
            'text' => Yii::t('app', 'Зміст'),
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
}
