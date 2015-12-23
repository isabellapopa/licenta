<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_202603_tableProfile extends Migration
{
    public function up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'idUser' => $this->integer()->notNull(),
            'idTest' => $this->integer()->notNull(),
            'score'=> $this->integer()->notNull(),
        ]);


    }

    public function down()
    {
      $this->dropTable('profile');
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
