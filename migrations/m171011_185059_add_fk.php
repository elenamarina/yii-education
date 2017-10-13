<?php

use yii\db\Migration;

class m171011_185059_add_fk extends Migration
{
    public function safeUp()
    {
        try{
            $this->addForeignKey('fk_access_user','evrnt_access',['user_id'], 'evrnt_user',['id']);
            $this->addForeignKey('fk_access_note','evrnt_access',['note_id'], 'evrnt_note',['id']);
            $this->addForeignKey('fk_note_user','evrnt_note',['creator'], 'evrnt_user',['id']);
            return true;
        } catch (Exception $exc){
            return false;
        }
    }

    public function safeDown()
    {
        echo "m171011_185059_add_fk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171011_185059_add_fk cannot be reverted.\n";

        return false;
    }
    */
}
