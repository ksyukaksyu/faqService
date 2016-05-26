<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Question;

/**
 * This is the model class for table "question".
 *
 * @property integer $id_category
 * @property string $author_name
 * @property string $author_mail
 * @property string $question
 */
class QuestionAddForm extends Model
{
    public $author_name;
    public $author_mail;
    public $id_category=null;
    public $question;

    public function rules()
    {
        return [
            [['author_name', 'author_mail', 'question', 'id_category'], 'required'],
            [['author_name'], 'string', 'max' => 100],
            [['author_mail'], 'email'],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'Question Category',
            'author_name' => 'Your Name',
            'author_mail' => 'Your E-Mail',
            'question' => 'Question Text',
        ];
    }

    public function save() {
        if (!$this->validate()) {
            return null;
        }

        $question = new Question();
        $question->author_name = $this->author_name;
        $question->author_mail = $this->author_mail;
        $question->id_category = $this->id_category;
        $question->question = $this->question;

        return $question->save() ? $question : null;
    }
}