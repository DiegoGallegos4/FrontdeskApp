<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_163708_create_torre extends Migration
{
    public function up()
    {
        $this->createTable('Torre', [
            'id'=> $this->primaryKey(),
            'nombre' => $this->string(),  
        ]);
    }

    public function down()
    {
        $this->dropTable('Torre');
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
