<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/*
 * @property $firstname string
 * @property $lastname string
 * @property $email string
 * @property $gender string
 */
class Person extends ActiveRecord
{
    public static function tableName()
    {
        return "person";
    }

    public function rules()
    {
        return [
            [["firstname", "lastname", "email", "gender"], "string"],
            [["firstname", "lastname", "email"], "required"],
        ];
    }
}