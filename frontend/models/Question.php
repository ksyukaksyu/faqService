<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $datetime_added
 * @property string $state
 * @property integer $is_blocked
 * @property integer $is_telegram
 * @property string $author_name
 * @property string $author_mail
 * @property string $question
 * @property string $answer
 *
 * @property Category $idCategory
 * @property QuestionStopword[] $questionStopwords
 * @property Stopword[] $idStopwords
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'is_blocked', 'is_telegram'], 'integer'],
            [['datetime_added'], 'safe'],
            [['state', 'question', 'answer'], 'string'],
            [['author_name', 'question'], 'required'],
            [['author_name', 'author_mail'], 'string', 'max' => 100],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Question ID',
            'id_category' => 'Category ID',
            'datetime_added' => 'Date and time added',
            'state' => 'Status',
            'is_blocked' => 'Is Blocked',
            'is_telegram' => 'Is from Telegram Bot',
            'author_name' => 'Author Name',
            'author_mail' => 'Author E-Mail',
            'question' => 'Question Text',
            'answer' => 'Answer Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionStopwords()
    {
        return $this->hasMany(QuestionStopword::className(), ['id_question' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStopwords()
    {
        return $this->hasMany(Stopword::className(), ['id' => 'id_stopword'])->viaTable('question_stopword', ['id_question' => 'id']);
    }
}
