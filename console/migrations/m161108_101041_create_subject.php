<?php

use yii\db\Migration;

class m161108_101041_create_subject extends Migration
{
    public function up()
    {
        $this->createTable('subject', [
            'id'            => $this->primaryKey(),
            'name'          => $this->integer()->notNull()->defaultValue(0),
            'score'         => $this->float()->notNull()->defaultValue(0.0),
            'intro'         => $this->text(),
            'teacher_id'    => $this->integer()->notNull()->defaultValue(0),
            'status'        => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at'    => $this->integer()->notNull(),
            'updated_at'    => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m161108_100702_create_subject cannot be reverted.\n";
        $this->dropTable('subject');
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
