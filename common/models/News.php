<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $image
 * @property string $title
 * @property string $body
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'image', 'title', 'body'], 'required'],
            [['category_id', 'user_id'], 'integer'],
            [['body'], 'string'],
            [['image', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'image' => 'Image',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
