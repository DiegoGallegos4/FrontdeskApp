<?php

use yii\db\Schema;
use yii\db\Migration;

class m160204_175507_dropFK_User_Aviso extends Migration
{
    public function up()
    {
                

        $this->dropForeignKey('fk_Avisouser_id', 'Aviso');
    }

    public function down()
    {
        echo "m160204_175507_dropFK_User_Aviso cannot be reverted.\n";

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
