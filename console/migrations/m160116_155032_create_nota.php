<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155032_create_nota extends Migration
{
    public function up()
    {
        $this->createTable('Nota', [
            'id' => $this->primaryKey(),
            'cuerpo' => $this->string(),
            'fecha_limite'=> $this->dateTime(),
            'residente_id' => $this->integer(),
        ]);
        
        $this->addForeignKey('fk_NotaResidente_id', 'Nota', 'residente_id', 'Residente', 'id');
        
    }

    public function down()
    {
        $this->dropTable('Nota');
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
