<?php

use yii\db\Schema;
use yii\db\Migration;

class m160126_161524_add_firma_to_Paquete extends Migration
{
    public function up()
    {
        $this->addColumn('Paquete', 'firma', $this->binary());
    }

    public function down()
    {
        echo "m160126_161524_add_firma_to_Paquete cannot be reverted.\n";

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
