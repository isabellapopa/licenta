<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_202550_tableQuestion extends Migration
{
    public function up()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey(),
            'idTest' => $this->integer()->notNull(),
            'corectAnswer' => $this->string()->notNull(),
            'answerScore'=> $this->string()->notNull(),
        ]);

    }

    public function down()
    {
       $this->dropTable('question');
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
