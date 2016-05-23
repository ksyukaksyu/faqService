<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stopword".
 *
 * @property integer $id
 * @property string $word
 *
 * @property QuestionStopword[] $questionStopwords
 * @property Question[] $idQuestions
 */
class Stopword extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stopword';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['word'], 'required'],
            [['word'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Stopword ID',
            'word' => 'Stopword',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionStopwords()
    {
        return $this->hasMany(QuestionStopword::className(), ['id_stopword' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdQuestions()
    {
        return $this->hasMany(Question::className(), ['id' => 'id_question'])->viaTable('question_stopword', ['id_stopword' => 'id']);
    }
}
