<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155005_create_empleado_residente extends Migration
{
    public function up()
    {
        $this->createTable('EmpleadoResidente', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
            'posicion' => $this->string(),
            'imagen' => $this->binary(),
        ]);
        
        $this->addForeignKey('fk_Residente_id', 'EmpleadoResidente', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('EmpleadoResidente');
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
