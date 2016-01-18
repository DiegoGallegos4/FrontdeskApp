<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_163039_create_parqueo extends Migration
{
    public function up()
    {
        $this->createTable('Parqueo', [
            'id'=> $this->primaryKey(),
            'parqueo' => $this->string(),
            'torre_id' => $this->integer(),
            'residente_id' => $this->integer(),
        ]);
        
        $this->addForeignKey('fk_Residente_id', 'Parqueo', 'residente_id', 'Residente', 'id');
        $this->addForeignKey('fk_Torre_id', 'Parqueo', 'residente_id', 'Torre', 'id');
    }

    public function down()
    {
        $this->dropTable('Parqueo');
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
