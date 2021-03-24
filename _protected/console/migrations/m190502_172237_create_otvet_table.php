<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%otvet}}`.
 */
class m190502_172237_create_otvet_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%otvet}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'user_email' => $this->string(),
            'message' => $this->string(),
            'created_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%otvet}}');
    }
}
