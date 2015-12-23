<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_202638_tableTest extends Migration
{
    public function up()
    {
        $this->createTable('test', [
            'idTest' => $this->primaryKey(),
            'idUser' => $this->integer()->notNull(),
        ]);


    }

    public function down()
    {
       $this->dropTable('test');
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
