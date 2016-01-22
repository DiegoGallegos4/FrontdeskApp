<?php

use yii\db\Schema;
use yii\db\Migration;

class m160121_233911_add_column_descripcion_AreaComun extends Migration
{
    public function up()
    {
        $this->addColumn('AreaComun', 'descripcion', $this->string());
    }

    public function down()
    {
        echo "m160121_233911_add_column_descripcion_AreaComun cannot be reverted.\n";

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
