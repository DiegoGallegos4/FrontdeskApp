<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155142_create_condominio extends Migration
{
    public function up()
    {
        $this->createTable('Condominio', [
            'id' => $this->primaryKey(),
            'condominio' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('Condominio');
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
