<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155152_create_aviso extends Migration
{
    public function up()
    {
        $this->createTable('Aviso', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'cuerpo' => $this->string(),
            'titulo' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_user_id', 'Aviso', 'user_id', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('Aviso');
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
