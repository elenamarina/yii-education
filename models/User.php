<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evrnt_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $salt
 * @property string $access_token
 * @property string $created_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evrnt_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'surname', 'password', 'salt'], 'required'],
            [['username', 'name', 'surname', 'password', 'salt', 'access_token', 'created_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'surname' => 'Surname',
            'password' => 'Password',
            'salt' => 'Salt',
            'access_token' => 'Access Token',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
