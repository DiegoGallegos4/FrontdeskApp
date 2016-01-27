<?php

use yii\db\Schema;
use yii\db\Migration;

class m160126_161540_add_condoID_to_ControlLlave extends Migration
{
    public function up()
    {
        $this->addColumn('Llave', 'condo_id', $this->integer());
        $this->addForeignKey('fk_LlaveCondominio', 'Llave', 'condo_id', 'Condominio', 'id');
    }

    public function down()
    {
        echo "m160126_161540_add_condoID_to_ControlLlave cannot be reverted.\n";

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
