<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_154918_create_junction_residente_and_visita extends Migration
{
    public function up()
    {
        $this->createTable('Residente_Visita', [
            'residente_id' => $this->integer(),
            'visita_id' => $this->integer(),
            'PRIMARY KEY(residente_id,visita_id)',
        ]);
        
        $this->createIndex('idx-Residente_Visita-residente_id', 'Residente_Visita', 'residente_id');
        $this->createIndex('idx-Residente_Visita-visita_id', 'Residente_Visita', 'visita_id');
        
        $this->addForeignKey('fk-Residente_Visita-residente_id', 'Residente_Visita', 'residente_id', 'Residente', 'id');
        $this->addForeignKey('fk-Residente_Visita-visita_id', 'Residente_Visita', 'visita_id', 'Visita', 'id');
        
    }

    public function down()
    {
        $this->dropTable('Residente_Visita');
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
