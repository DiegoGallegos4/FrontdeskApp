<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_154951_create_preferencia extends Migration
{
    public function up()
    {
        $this->createTable('Preferencia', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'tipo_contacto' => $this->string(),
            'horario_contacto' => $this->time(),
            'contacto_emergencia' => $this->string(),
            'tipo_recepcion' => $this->string(),
            'apoyo_compras' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_Residente_id', 'Preferencia', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Preferencia');
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