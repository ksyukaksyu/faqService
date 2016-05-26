<?php

namespace frontend\models;

use Yii;
use yii\bootstrap\Html;

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
     * Question states
     */
    const STATE_DRAFT = "draft";
    const STATE_PUBLISHED = "published";
    const STATE_HIDDEN = "hidden";

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
        $fields = [
            [['id_category', 'is_blocked', 'is_telegram'], 'integer'],
            [['datetime_added'], 'safe'],
            [['state', 'question', 'answer'], 'string'],
            [['author_name', 'question'], 'required'],
            [['author_name', 'author_mail'], 'string', 'max' => 100],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];

        if (!$this->isNewRecord) {
            $fields[] = [['id_category'], 'required'];
        }

        return $fields;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Question ID',
            'id_category' => 'Category',
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
    public function getCategory()
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
    public function getStopwords()
    {
        return $this->hasMany(Stopword::className(), ['id' => 'id_stopword'])->viaTable('question_stopword', ['id_question' => 'id']);
    }

    public function getQuestionShort() {
        return (strlen($this->question) > 50) ? substr($this->question, 0, 50) . "..." : $this->question;
    }
    
    public function getTelegram() {
        return $this->is_telegram ?
            Html::tag('span', '', [
                'class' => 'glyphicon glyphicon-send',
                'title' => 'From Telegram Bot'
            ]) : '';
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        $needToUpdate = false;

        if (!$this->isNewRecord) {
            if ($this->state != self::STATE_DRAFT && $this->answer == '') {
                $this->addError('state', 'You cannot publish question without answer!');
            }
            $needToUpdate = true;
        }
        else {
            $result = parent::save($runValidation, $attributeNames);
        }

        if ($this->hasErrors()) {
            return null;
        }

        $currentStopWords = $this->stopwords;
        foreach($currentStopWords as $stopword) {
            $this->unlink('stopwords', $stopword, true);
        }

        $stopwords = Stopword::find()->all();

        foreach ($stopwords as $stopword) {
            if (strpos(strtolower($this->question), strtolower($stopword->word)) !== false) {
                $this->link('stopwords', $stopword);
                if ($this->isNewRecord) {
                    $this->is_blocked = true;
                }
                $needToUpdate = true;
            }
        }

        if (!$this->isNewRecord) {
            if (count($this->stopwords) > 0 && (int)$this->is_blocked == 0) {
                $this->addError('question', 'You cannot unblock question that contains stopwords!');
                $needToUpdate = false;
                $result = null;
            }
        }

        return $needToUpdate ? parent::save($runValidation, $attributeNames) : $result;
    }

    public function getStopwordsBubles() {
        $stopwords = $this->getStopwords()->all();

        $result = '';
        foreach ($stopwords as $stopword) {
            $result .= Html::tag('span', Html::encode($stopword->word), [
                'class' => 'label label-pill label-danger',
                'title' => $stopword->word
            ]) . " ";
        }

        return $result;
    }
}
