<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property int $id
 * @property string $name
 * @property int $cours_id
 *
 * @property Courses $cours
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cours_id'], 'required'],
            [['cours_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['cours_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['cours_id' => 'id']],
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
            'cours_id' => 'Cours ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCours()
    {
        return $this->hasOne(Courses::className(), ['id' => 'cours_id']);
    }
}
