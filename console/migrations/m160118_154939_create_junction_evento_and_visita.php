<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_154939_create_junction_evento_and_visita extends Migration
{
    public function up()
    {
        $this->createTable('Evento_Visita', [
            'evento_id' => $this->integer(),
            'visita_id' => $this->integer(),
            'PRIMARY KEY(evento_id,visita_id)',
        ]);
        
        $this->createIndex('idx-Evento_Visita-evento_id', 'Evento_Visita', 'evento_id');
        $this->createIndex('idx-Evento_Visita-visita_id', 'Evento_Visita', 'visita_id');
        
        $this->addForeignKey('fk-Evento_Visita-evento_id', 'Evento_Visita', 'evento_id', 'Evento', 'id');
        $this->addForeignKey('fk-Evento_Visita-visita_id', 'Evento_Visita', 'visita_id', 'Visita', 'id');
    }

    public function down()
    {
        $this->dropTable('Evento_Visita');
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
