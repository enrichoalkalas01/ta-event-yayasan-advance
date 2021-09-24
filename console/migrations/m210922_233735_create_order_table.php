<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%event}}`
 */
class m210922_233735_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'event_id' => $this->integer(11)->notNull(),
            'status' => $this->tinyInteger(2),
            'bukti_pembayaran' => $this->string(2000),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-order-user_id}}',
            '{{%order}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-order-user_id}}',
            '{{%order}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-order-event_id}}',
            '{{%order}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-order-event_id}}',
            '{{%order}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-order-user_id}}',
            '{{%order}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-order-user_id}}',
            '{{%order}}'
        );

        // drops foreign key for table `{{%event}}`
        $this->dropForeignKey(
            '{{%fk-order-event_id}}',
            '{{%order}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-order-event_id}}',
            '{{%order}}'
        );

        $this->dropTable('{{%order}}');
    }
}
