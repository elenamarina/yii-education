<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evrnt_note".
 *
 * @property integer $id
 * @property string $text
 * @property integer $creator
 * @property integer $created_at
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evrnt_note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'creator'], 'required'],
            [['text'], 'string'],
            [['creator', 'created_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'creator' => 'Creator',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return NoteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoteQuery(get_called_class());
    }
}
