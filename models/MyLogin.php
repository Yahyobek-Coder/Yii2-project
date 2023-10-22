<?php

namespace frontend\models;

use yii\base\Model;

class MyLogin extends Model
{
    public $firstname;
    public $email;
    public $age;
    public $gender;

    public function rules()
    {
        return [
            [['firstname'], 'string'],
            [['email'], 'required', 'message' => 'Iltimos maydonni toldiring'],
            [['age'], 'integer']
        ];  
    }

    public function myFunction()
    {
        echo $this->age;
    }
}