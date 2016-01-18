<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155158_create_llaves extends Migration
{
    public function up()
    {
        $this->createTable('Llave', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'lugar_llave' => $this->string(),
            'recipiente' => $this->string(),
            'fecha_entrega' => $this->dateTime(),
            'fecha_devolucion' => $this->dateTime(),
            'forma_autorizacion' => $this->string(),
            'observaciones' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_Llavesuser_id', 'Llave', 'user_id', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('Llave');
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
