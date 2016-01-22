<?php

use yii\db\Schema;
use yii\db\Migration;

class m160121_144450_create_foreignKey_from_Bodega_to_Torre extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_BodegatoTorre_torre_id', 'Bodega', 'torre_id', 'Torre', 'id');
    }

    public function down()
    {
        echo "m160121_144450_create_foreignKey_from_Bodega_to_Torre cannot be reverted.\n";

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
