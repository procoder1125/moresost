<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brand_logotype}}`.
 */
class m190502_172300_create_brand_logotype_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brand_logotype}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'filename' => $this->string(),
            'original_name' => $this->string(),
            'created_at'=>$this->dateTime(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%brand_logotype}}');
    }
}
