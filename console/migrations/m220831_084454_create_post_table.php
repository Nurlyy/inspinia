<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m220831_084454_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'body' => $this->text(),
            'image_url' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'status' => $this->integer(),
            'created_by' => $this->integer(),

        ]);

        $this->addForeignKey("FK_created_by", '{{%post}}', 'created_by', '{{user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_created_by', '{{%post}}');
        $this->dropTable('{{%post}}');
    }
}
