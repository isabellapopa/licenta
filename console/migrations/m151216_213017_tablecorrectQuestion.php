<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_213017_tablecorrectQuestion extends Migration
{
    public function up()
    {
        $this->createTable('correctQuestion', [
            'idQuestion' => $this->primaryKey(),
            'idUser' => $this->integer()->notNull(),
        ]);


    }

    public function down()
    {
      $this->dropTable('correctQuestion');
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
