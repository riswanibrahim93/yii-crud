<?php
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $nama;
    public $email;

    public function rules()
    {
        return [
            [['nama', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
?>