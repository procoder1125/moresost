<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foto_cours}}`.
 */
class m190502_172237_create_foto_cours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foto_cours}}', [
            'id' => $this->primaryKey(),
            'cours_id' => $this->integer()->notNull(),
            'filename' => $this->string()->notNull(),
            'original_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%foto_cours}}');
    }
}
