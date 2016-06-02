<?php

namespace frontend\models;

use common\models\User;
use Yii;
use yii\base\Model;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $password_confirm
 * @property string $email
 * @property integer $status
 */
class UserAddForm extends Model
{
    public $id = 0;
    public $username;
    public $password;
    public $password_confirm;
    public $email;
    public $status = 10;

    public function rules()
    {
        return [
            [['username', 'password', 'password_confirm', 'email'], 'required'],
            [['username'], 'string', 'max' => 100],
            [['username'], 'unique', 'targetClass' => '\common\models\User', 'targetAttribute' => 'username'],
            [['password', 'password_confirm'], 'string', 'min' => 6, 'max' => 40],
            [['password'], 'compare', 'compareAttribute' => 'password_confirm'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => '\common\models\User', 'targetAttribute' => 'email'],
            [['status'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'User Name',
            'password' => 'Password',
            'password_confirm' => 'Confirm Password',
            'email' => 'E-Mail',
            'status' => 'Status',
        ];
    }

    /**
     * Save record
     * @return User|null
     */
    public function save() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = 10;

        if ($user->save()) {
            $this->id = $user->id;
            return $user;
        }

        return null;
    }
    
    public function isNewRecord() {
        return true;
    }

    /**
     * Statuses list
     * @return array
     */
    public static function getStatusesList() {
        return User::getStatusesList();
    }
}