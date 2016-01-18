<?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_165624_addFK_evento extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_EventoAreaComun_id', 'Evento', 'area_id', 'AreaComun', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_EventoAreaComun_id', 'Evento');
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
