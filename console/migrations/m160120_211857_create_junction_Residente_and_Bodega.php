<?php

use yii\db\Schema;
use yii\db\Migration;

class m160120_211857_create_junction_Residente_and_Bodega extends Migration
{
    public function up()
    {
        $this->createTable('Residente_Bodega', [
           'residente_id' => $this->integer(),
            'bodega_id'=> $this->integer(),
            'PRIMARY KEY(residente_id,bodega_id)'
        ]);
        
        $this->createIndex('idx-Residente_Bodega-residente_id', 'Residente_Bodega', 'residente_id');
        $this->createIndex('idx-Residente_Bodega-bodega_id', 'Residente_Bodega', 'bodega_id');
        $this->addForeignKey('fk-Residente_Bodega-residente_id', 'Residente_Bodega', 'residente_id', 'Residente', 'id');
        $this->addForeignKey('fk-Residente_Bodega-bodega_id', 'Residente_Bodega', 'bodega_id', 'Bodega', 'id');
    }

    public function down()
    {
        $this->dropTable('Residente_Bodega');
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
