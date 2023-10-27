<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 */
class Category extends ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, web'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
                $filename = md5(time()) . $this->imageFile->basename;
                $this->imageFile->saveAs('uploads/' . $filename . '.' . $this->imageFile->extension);
                $this->image = $filename . '.' . $this->imageFile->extension;
            return true;
        }else{
            return false;
        }
    }
}
