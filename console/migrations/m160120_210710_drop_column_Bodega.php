<?php

use yii\db\Schema;
use yii\db\Migration;

class m160120_210710_drop_column_Bodega extends Migration
{
    public function up()
    {
        $this->dropTable('Bodega');
         $this->createTable('Bodega', [
            'id'=> $this->primaryKey(),
            'bodega' => $this->string(),
            'torre_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_Bodega-Torre_torre_id', 'Bodega', 'torre_id', 'Torre', 'id');
        
        $this->dropTable('Parqueo');
        $this->createTable('Parqueo', [
            'id'=> $this->primaryKey(),
            'parqueo' => $this->string(),
            'torre_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_Parqueo-Torre_torre_id', 'Parqueo', 'torre_id', 'Torre', 'id');
    }

    public function down()
    {
        echo "m160120_210710_drop_column_Bodega cannot be reverted.\n";

        return false;
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
