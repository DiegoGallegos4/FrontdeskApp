<?php

use yii\db\Schema;
use yii\db\Migration;

class m160120_211903_create_junction_Residente_and_Parqueo extends Migration
{
    public function up()
    {
        $this->createTable('Residente_Parqueo', [
           'residente_id'=> $this->integer(),
            'parqueo_id'=> $this->integer(),
            'PRIMARY KEY(residente_id,parqueo_id)'
        ]);
        
        $this->createIndex('idx-Residente_Parqueo-residente_id', 'Residente_Parqueo', 'residente_id');
        $this->createIndex('idx-Residente_Parqueo-parqueo_id', 'Residente_Parqueo', 'parqueo_id');
        $this->addForeignKey('fk-ResidenteParqueo-residente_id', 'Residente_Parqueo', 'residente_id', 'Residente', 'id');
        $this->addForeignKey('fk-ResidenteParqueo-parqueo_id', 'Residente_Parqueo', 'parqueo_id', 'Parqueo', 'id');
    }

    public function down()
    {
        $this->dropTable('Residente_Parqueo');
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
