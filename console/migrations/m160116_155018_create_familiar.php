<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155018_create_familiar extends Migration
{
    public function up()
    {
        $this->createTable('Familiar', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'relacion' => $this->string(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_FamiliarResidente_id', 'Familiar', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Familiar');
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
