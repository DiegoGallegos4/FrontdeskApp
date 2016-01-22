<?php

use yii\db\Schema;
use yii\db\Migration;

class m160122_174155_add_column_mensaje_to_Llamada extends Migration
{
    public function up()
    {
        $this->addColumn('Llamada', 'mensaje', $this->string());
    }

    public function down()
    {
        echo "m160122_174155_add_column_mensaje_to_Llamada cannot be reverted.\n";

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
