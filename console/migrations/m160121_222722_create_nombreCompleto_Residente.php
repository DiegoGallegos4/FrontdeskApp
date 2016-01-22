<?php

use yii\db\Schema;
use yii\db\Migration;

class m160121_222722_create_nombreCompleto_Residente extends Migration
{
    public function up()
    {
        $this->addColumn('Residente', 'nombre_completo', $this->string());
    }

    public function down()
    {
        echo "m160121_222722_create_nombreCompleto_Residente cannot be reverted.\n";

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
