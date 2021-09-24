<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_event}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%event}}`
 */
class m210922_233719_create_user_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_event}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'event_id' => $this->integer(11)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-user_event-user_id}}',
            '{{%user_event}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-user_event-user_id}}',
            '{{%user_event}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-user_event-event_id}}',
            '{{%user_event}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-user_event-event_id}}',
            '{{%user_event}}',
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
            '{{%fk-user_event-user_id}}',
            '{{%user_event}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-user_event-user_id}}',
            '{{%user_event}}'
        );

        // drops foreign key for table `{{%event}}`
        $this->dropForeignKey(
            '{{%fk-user_event-event_id}}',
            '{{%user_event}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-user_event-event_id}}',
            '{{%user_event}}'
        );

        $this->dropTable('{{%user_event}}');
    }
}
