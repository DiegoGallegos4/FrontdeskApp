<?php

use yii\db\Schema;
use yii\db\Migration;

class m160125_165721_add_HorarioColumns_VisitaJunctions extends Migration
{
    public function up()
    {
        $this->addColumn('Evento_Visita','hora_entrada',$this->dateTime());
        $this->addColumn('Evento_Visita','hora_salida',$this->dateTime());
        $this->addColumn('Residente_Visita','hora_entrada',$this->dateTime());
        $this->addColumn('Residente_Visita','hora_salida',$this->dateTime());
    }

    public function down()
    {
        echo "m160125_165721_add_HorarioColumns_VisitaJunctions cannot be reverted.\n";

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
