<?php

use yii\db\Migration;

class m161108_100702_create_score extends Migration
{
    public function up()
    {
        $this->createTable('score', [
            'id'            => $this->primaryKey(),
            'user_id'       => $this->integer()->notNull()->defaultValue(0),
            'subject_id'    => $this->integer()->notNull()->defaultValue(0),
            'score'         => $this->float()->notNull()->defaultValue(0.0),
            'status'        => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at'    => $this->integer()->notNull(),
            'updated_at'    => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m161108_100702_create_score cannot be reverted.\n";
        $this->dropTable('score');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
