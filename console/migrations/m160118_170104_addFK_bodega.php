<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_170104_addFK_bodega extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_BodegaTorre_id', 'Bodega', 'torre_id', 'Torre', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_BodegaTorre_id', 'Bodega');
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
