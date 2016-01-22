<?php

use yii\db\Schema;
use yii\db\Migration;

class m160121_160540_addFK_to_controlLlave_and_create_Empleado extends Migration
{
    public function up()
    {
        $this->createTable('Empleado', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_ControlLlave-Empleado_empleado_id', 'ControlLlave', 'empleado_id', 'Empleado', 'id');
    }

    public function down()
    {
        echo "m160121_160540_addFK_to_controlLlave_and_create_Empleado cannot be reverted.\n";

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
