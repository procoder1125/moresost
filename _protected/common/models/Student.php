<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $fullname
 * @property string $group_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['user_profile_id', 'integer'],
            
            [[ 'group_id'], 'required'],
            [['fullname', 'group_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            //'user_id' => 'user_id',
            'user_profile_id' => 'Profile_id',
            'fullname' => 'Fullname',
            'group_id' => 'Group ID',
        ];
    }
}
