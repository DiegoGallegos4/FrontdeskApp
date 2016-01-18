<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_164556_create_visita extends Migration
{
    public function up()
    {
        $this->createTable('Visita', [
            'id'=> $this->primaryKey(),
            'nombre' => $this->string(),
            'apellido' => $this->string(),
            'identidad' => $this->string(),
            'tipo' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('Visita');
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
