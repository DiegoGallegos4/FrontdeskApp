<?php

use yii\db\Schema;
use yii\db\Migration;

class m160127_195835_drop_condo_id_Llave extends Migration
{
    public function up()
    {
        $this->dropForeignKey('fk_LlaveCondominio', 'Llave');
        $this->dropColumn('Llave', 'condo_id');
    }

    public function down()
    {
        echo "m160127_195835_drop_condo_id_Llave cannot be reverted.\n";

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
