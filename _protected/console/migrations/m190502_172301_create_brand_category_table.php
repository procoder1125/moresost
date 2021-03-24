<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brand_kategory}}`.
 */
class m190502_172301_create_brand_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brand_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%brand_category}}');
    }
}
