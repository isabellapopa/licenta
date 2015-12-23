<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_211536_tablewrongQuestion extends Migration
{
    public function up()
    {
        $this->createTable('wrongQuestion', [
            'idQuestion' => $this->primaryKey(),
            'idUser' => $this->integer()->notNull(),
        ]);


    }

    public function down()
    {
      $this->dropTable('wrongQuestion');
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
