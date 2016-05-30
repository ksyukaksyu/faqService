<?php

namespace frontend\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Question[] $questions
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Category ID',
            'name' => 'Category name',
            'TotalQuestionsNumber' => 'Total',
            'PublishedQuestionsNumber' => 'Published',
            'NewQuestionsNumber' => 'New',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['id_category' => 'id']);
    }

    #######################################################
    #                 Some virtual fields                 #
    #######################################################

    public function getTotalQuestionsNumber() {
        return Question::find()
            ->where("id_category={$this->id}")
            ->count();
    }

    public function getPublishedQuestionsNumber() {
        return Question::find()
            ->where("state='" . Question::STATE_PUBLISHED . "'")
            ->andWhere("id_category={$this->id}")
            ->count();
    }

    public function getNewQuestionsNumber() {
        return Question::find()
            ->where("state='" . Question::STATE_DRAFT . "'")
            ->andWhere("id_category={$this->id}")
            ->count();
    }

    #######################################################
    #                  Some view helpers                  #
    #######################################################

    public function getRAWData() {
        return $this->name .
            Html::tag('span', "new - {$this->NewQuestionsNumber}", [
                'class' => 'label label-warning right',
                'title' => 'New'
            ]) .
            Html::tag('span', "published - {$this->PublishedQuestionsNumber}", [
                'class' => 'label label-success right',
                'title' => 'Published'
            ]) .
            Html::tag('span', "total - {$this->TotalQuestionsNumber}", [
                'class' => 'label label-primary right',
                'title' => 'Total'
            ]);
    }
}
