<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_154936_create_residente extends Migration
{
    public function up()
    {
        $this->createTable('Residente', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
            'fecha_nacimiento' => $this->date(),
            'estado_civil' => $this->string(),
            'imagen' => $this->binary(),
            'nacionalidad' => $this->string(),
            'hobbies' => $this->string(),
            'empresa' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('Residente');
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
