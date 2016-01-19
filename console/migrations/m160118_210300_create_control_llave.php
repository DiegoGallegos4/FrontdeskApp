<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_210300_create_control_llave extends Migration
{
    public function up()
    {
        $this->createTable('ControlLlave',[
            'id' => $this->primaryKey(),
            'llave_id' => $this->integer(),
            'empleado_id' => $this->integer(),
            'fecha_entrega' => $this->dateTime(),
            'fecha_devolucion' => $this->dateTime(),
            'forma_autorizacion' => $this->string(),
            'observaciones' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('ControlLlave');
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
