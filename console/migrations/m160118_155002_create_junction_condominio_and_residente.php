<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_155002_create_junction_condominio_and_residente extends Migration
{
    public function up()
    {
        $this->createTable('Residente_Condominio', [
            'residente_id' => $this->integer(),
            'condominio_id' => $this->integer(),
            'PRIMARY KEY(residente_id,condominio_id)',
        ]);
        
        $this->createIndex('idx-Residente_Condominio-residente_id', 'Residente_Condominio', 'residente_id');
        $this->createIndex('idx-Residente_Condominio-condominio_id', 'Residente_Condominio', 'condominio_id');
        
        $this->addForeignKey('fk-Residente_Condominio-residente_id', 'Residente_Condominio', 'residente_id', 'Residente', 'id');
        $this->addForeignKey('fk-Residente_Condominio-condominio_id', 'Residente_Condominio', 'condominio_id', 'Condominio', 'id');
    }

    public function down()
    {
        $this->dropTable('condominio_id');
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
