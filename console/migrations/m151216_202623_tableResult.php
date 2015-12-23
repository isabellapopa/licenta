<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_202623_tableResult extends Migration
{
    public function up()
    {
        $this->createTable('result', [
            'idTest' => $this->primaryKey(),
            'result' => $this->integer()->notNull(),
            'numberCorectQuestion' => $this->integer()->notNull(),
            'numberWrongQuestion'=> $this->integer()->notNull(),
        ]);


    }

    public function down()
    {
       $this->dropTable('result');
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
