<?php

use yii\db\Migration;

class m171011_131655_evrnt_note extends Migration
{
    public function safeUp()
    {
        $this->createTable('evrnt_note',[
            'id'=>$this->primaryKey(),
            'text'=>$this->text()->notNull(),
            'creator'=>$this->integer()->notNull(),
            'created_at'=>$this->integer(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('evrnt_note') ;

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_131655_evrnt_note cannot be reverted.\n";

        return false;
    }
    */
}
