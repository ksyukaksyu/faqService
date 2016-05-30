<?php

namespace frontend\models;

use common\models\User;
use Yii;
use yii\base\Model;

/**
 * This is the model class for table "User Update Form".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $password_confirm
 * @property string $email
 * @property integer $status
 */
class UserUpdateForm extends Model
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
            [['email'], 'required'],
            [['password', 'password_confirm'], 'string', 'min' => 6, 'max' => 40],
            [['password'], 'compare', 'compareAttribute' => 'password_confirm'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => '\common\models\User', 'targetAttribute' => 'email', 'filter' => 'id <> ' . $this->id],
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
     */
    public function save() {
        if (!$this->validate()) {
            return null;
        }

        $user = User::findOne(['id' => $this->id]);

        $user->email = $this->email;

        if ($this->password != '' && $this->password_confirm != ''){
            $user->setPassword($this->password);
        }
        
        $user->status = $this->status;


        if ($user->save()) {
            return $user;
        }

        return null;
    }

    public function isNewRecord() {
        return false;
    }

    /**
     * Statuses list
     *
     * @return array
     */
    public static function getStatusesList() {
        return User::getStatusesList();
    }
}