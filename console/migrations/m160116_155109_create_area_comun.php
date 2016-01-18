<?php

use yii\db\Schema;
use yii\db\Migration;

class m160116_155109_create_area_comun extends Migration
{
    public function up()
    {
        $this->createTable('AreaComun', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('AreaComun');
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
