<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_210249_create_llave extends Migration
{
    public function up()
    {
        $this->createTable('Llave', [
            'id' => $this->primaryKey(),
            'lugar' => $this->string(),
            'cantidad' => $this->integer(),
        ]);
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
