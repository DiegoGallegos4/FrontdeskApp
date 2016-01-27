<?php

use yii\db\Schema;
use yii\db\Migration;

class m160126_161507_addFK_to_AreaComun_to_Torre extends Migration
{
    public function up()
    {
        $this->addColumn('AreaComun', 'torre_id', $this->integer());
        $this->addForeignKey('fk_Torre-AreaComun_torre_id', 'AreaComun', 'torre_id', 'Torre', 'id');
    }

    public function down()
    {
        echo "m160126_161507_addFK_to_AreaComun_to_Torre cannot be reverted.\n";

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
