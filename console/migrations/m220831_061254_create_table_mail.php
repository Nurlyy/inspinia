<?php

use yii\db\Migration;

/**
 * Class m220831_061254_create_table_mail
 */
class m220831_061254_create_table_mail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220831_061254_create_table_mail cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220831_061254_create_table_mail cannot be reverted.\n";

        return false;
    }
    */
}
