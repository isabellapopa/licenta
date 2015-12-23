<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_171405_alterUser extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'photoName', Schema::TYPE_STRING);

    }

    public function down()
    {
        $this->dropColumn('user','photoName');


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
