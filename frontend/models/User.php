<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }


    public function rules()
    {
        return [
            [['message', 'created_at', 'updated_at'], 'required'],
            [['message'], 'string'],
            [['permissions', 'created_at', 'updated_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'permissions' => 'Permissions',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}