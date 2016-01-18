<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_170057_addFK_parqueo extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_ParqueoTorre_id', 'Parqueo', 'residente_id', 'Torre', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_ParqueoTorre_id', 'Parqueo');
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
