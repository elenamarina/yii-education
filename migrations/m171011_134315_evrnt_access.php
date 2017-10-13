<?php

use yii\db\Migration;

class m171011_134315_evrnt_access extends Migration
{
    public function safeUp()
    {
        $this->createTable('evrnt_access',[
            'id'=>$this->primaryKey(),
            'note_id'=>$this->integer()->notNull(),
            'user_id'=>$this->integer()->notNull(),

        ]);
    }

    public function safeDown()
    {
        $this->dropTable('evrnt_access');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_134315_evrnt_access cannot be reverted.\n";

        return false;
    }
    */
}
