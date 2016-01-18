<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155051_create_evento extends Migration
{
    public function up()
    {
        $this->createTable('Evento', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'nombre_evento' => $this->string(),
            'fecha_inicio' => $this->dateTime(),
            'fecha_fin' => $this->dateTime(),
            'contrato' => $this->binary(),
            'area_id' => $this->integer(),
        ]);
        
        $this->addForeignKey('fk_EventoResidente_id', 'Evento', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Evento');
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
