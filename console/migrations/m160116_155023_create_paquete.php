<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155023_create_paquete extends Migration
{
    public function up()
    {
        $this->createTable('Paquete', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'num_buzon' => $this->string(),
            'tipo' => $this->string(),
            'fecha' => $this->dateTime(),
            'destino' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_PaqueteResidente_id', 'Paquete', 'residente_id', 'Residente', 'id');
        
    }

    public function down()
    {
        $this->dropTable('Paquete');
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
