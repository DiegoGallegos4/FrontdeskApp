<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155118_create_telefono extends Migration
{
    public function up()
    {
        $this->createTable('Telefono', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'tipo' => $this->string(),
            'telefono' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_Residente_id', 'Telefono', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Telefono');
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
