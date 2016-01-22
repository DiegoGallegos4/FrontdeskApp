<?php

use yii\db\Schema;
use yii\db\Migration;

class m160122_143758_change_typeHorario_Preferencia extends Migration
{
    public function up()
    {
        $this->alterColumn('Preferencia', 'horario_contacto', $this->string());
    }

    public function down()
    {
        echo "m160122_143758_change_typeHorario_Preferencia cannot be reverted.\n";

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
