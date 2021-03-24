<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "otvet".
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_email
 * @property string $message
 */
class Otvet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'otvet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['created_at', 'safe'],
            [['user_id'], 'integer'],
            [['user_email', 'message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_email' => 'User Email',
            'message' => 'Message',
            'created_at' => 'Time',
        ];
    }
}
