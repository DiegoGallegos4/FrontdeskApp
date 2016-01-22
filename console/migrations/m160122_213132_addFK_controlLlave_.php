<?php

use yii\db\Schema;
use yii\db\Migration;

class m160122_213132_addFK_controlLlave_ extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_ControlLlave-Llave_llave_id', 'ControlLlave', 'llave_id', 'Llave', 'id');
    }

    public function down()
    {
        echo "m160122_213132_addFK_controlLlave_ cannot be reverted.\n";

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
