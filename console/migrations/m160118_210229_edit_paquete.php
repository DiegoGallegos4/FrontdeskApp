<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_210229_edit_paquete extends Migration
{
    public function up()
    {
        $this->dropColumn('Paquete', 'tipo');
        $this->dropColumn('Paquete', 'destino');
        $this->addColumn('Paquete', 'entregado_por', $this->string());
    }

    public function down()
    {
        echo "m160118_210229_edit_paquete cannot be reverted.\n";

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
