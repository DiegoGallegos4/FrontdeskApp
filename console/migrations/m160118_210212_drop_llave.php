        <?php

use yii\db\Schema;
use yii\db\Migration;

class m160118_210212_drop_llave extends Migration
{
    public function up()
    {
        $this->dropTable('Llave');
    }

    public function down()
    {
        echo "m160118_210212_drop_llave cannot be reverted.\n";

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
