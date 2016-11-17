<?php
namespace frontend\app;

use frontend\models\User;
use Yii;
use yii\db\ActiveRecord;

class Score extends ActiveRecord
{
    public static function tableName()
    {
        return 'score';
    }

    public function getUser()
    {
        return $this->hasOne(User::tableName(), ['id' => 'user_id']);
    }
}
