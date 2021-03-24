<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand_logotype".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $filename
 * @property string $original_name
 * @property string $created_at
 */
class BrandLogotype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_logotype';
    }

    /**
     * {@inheritdoc}
     */

    public $foto;
    public function rules()
    
    {
        return [
            [['category_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'filename', 'original_name'], 'string', 'max' => 255],

            ['foto', 'file', 'extensions' => ['jpg', 'png', 'jpeg', 'gif'], 'skipOnEmpty' => false],
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
            'name' => 'Name',
            'filename' => 'Filename',
            'original_name' => 'Original Name',
            'created_at' => 'Created At',
        ];
    }
}
