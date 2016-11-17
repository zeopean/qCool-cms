<?php
namespace frontend\app;
use Yii;
use yii\db\ActiveRecord;

class Subject extends ActiveRecord
{
    public static function tableName()
    {
        return 'subject';
    }
}