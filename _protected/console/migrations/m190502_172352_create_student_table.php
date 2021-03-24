<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m190502_172352_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string()->notNull(),
            'group_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('student-groups', 'student','group_id', 'groups', 'id', 'cascade', 'cascade');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
