<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_163045_create_bodega extends Migration
{
    public function up()
    {
        $this->createTable('Bodega', [
            'id'=> $this->primaryKey(),
            'bodega' => $this->string(),
            'torre_id' => $this->integer(),
            'residente_id' => $this->integer(),
        ]);
        
        $this->addForeignKey('fk_BodegaResidente_id', 'Bodega', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Bodega');
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
