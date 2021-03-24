<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foto_cours".
 *
 * @property int $id
 * @property int $cours_id
 * @property string $filename
 * @property string $original_name
 */
class FotoCours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foto_cours';
    }

    /**
     * {@inheritdoc}
     */

     public $foto;
    public function rules()
    {
        return [
            //[['cours_id', 'original_name'], 'required'],
            [['cours_id'], 'integer'],
            [['filename', 'original_name'], 'string', 'max' => 255],

            ['foto', 'file', 'extensions' => ['jpg', 'png', 'jpeg', 'gif'], 'skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cours_id' => 'Cours ID',
            'filename' => 'Filename',
            'original_name' => 'Original Name',
            'foto' => 'foto',
        ];
    }
}
