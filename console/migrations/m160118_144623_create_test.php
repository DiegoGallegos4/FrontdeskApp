<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_144623_create_test extends Migration
{
    public function up()
    {
        $this->createTable('test', [
            'id'=>$this->primaryKey(),
            'residente_id'=>$this->integer(),
        ]);
        
        $this->addForeignKey('fk_test-res_id', 'test', 'residente_id', 'Residente', 'id');
    }

    public function down()
    {
        $this->dropTable('test');
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
