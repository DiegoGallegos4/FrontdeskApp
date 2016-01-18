<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155124_create_email extends Migration
{
    public function up()
    {
        $this->createTable('Email', [
            'id' => $this->primaryKey(),
            'residente_id' => $this->integer(),
            'tipo' => $this->string(),
            'email' => $this->string(),
        ]);
        
        $this->addForeignKey('fk_Residente_id', 'Email', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('Email');
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
