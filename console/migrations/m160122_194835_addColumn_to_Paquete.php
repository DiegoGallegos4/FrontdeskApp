<?php

use yii\db\Schema;
use yii\db\Migration;

class m160122_194835_addColumn_to_Paquete extends Migration
{
    public function up()
    {
        $this->addColumn('Paquete', 'observaciones', $this->string());
    }

    public function down()
    {
        echo "m160122_194835_addColumn_to_Paquete cannot be reverted.\n";

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
