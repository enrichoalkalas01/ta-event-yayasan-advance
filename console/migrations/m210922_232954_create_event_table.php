<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event}}`.
 */
class m210922_232954_create_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%event}}', [
            'id' => $this->primaryKey(),
            'event_name' => $this->string(255)->notNull(),
            'date_start' => $this->datetime()->notNull(),
            'date_end' => $this->datetime()->notNull(),
            'description' => $this->text(),
            'image' => $this->string(2000),
            'fee' => $this->integer(20)->defaultValue(0),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%event}}');
    }
}
