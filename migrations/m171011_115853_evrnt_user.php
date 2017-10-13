<?php

use yii\db\Migration;

class m171011_115853_evrnt_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('evrnt_user', [
            'id'=>$this->primaryKey(),
            'username'=>$this->string()->notNull(),
            'name'=>$this->string()->notNull(),
            'surname'=>$this->string()->notNull(),
            'password'=>$this->string()->notNull(),
            'salt'=>$this->string()->notNull(),
            'access_token'=>$this->string()->defaultValue(1),
            'created_at'=>$this->integer(),

        ]);
    }

    public function safeDown()
    {
        $this->dropTable('evrnt_user');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_115853_evrnt_user cannot be reverted.\n";

        return false;
    }
    */
}
