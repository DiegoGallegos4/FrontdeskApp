<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155041_create_llamada extends Migration
{
    public function up()
    {
       $this->createTable('Llamada', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'nombre' => $this->string(),
            'telefono' => $this->string(),
        ]);
       
       $this->addForeignKey('fk_LlamadaResidente_id', 'Llamada', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Llamada');
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
