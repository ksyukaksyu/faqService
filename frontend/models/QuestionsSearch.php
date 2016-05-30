<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Question;

/**
 * QuestionsSearch represents the model behind the search form about `frontend\models\Question`.
 */
class QuestionsSearch extends Question
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'is_blocked', 'is_telegram'], 'integer'],
            [['datetime_added', 'state', 'author_name', 'author_mail', 'question', 'answer'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $type = '')
    {
        $query = Question::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['datetime_added' => SORT_DESC]]
        ]);

        $this->load($params);

        $createdFrom = 0;
        $createdTo = 0;

        if ($this->datetime_added != '') {
            $createdFrom = (new \DateTime($this->datetime_added . " 00:00:00"))->format('Y-m-d H:i:s');
            $createdTo = (new \DateTime($this->datetime_added . " 23:59:59"))->format('Y-m-d H:i:s');
            $this->datetime_added = (new \DateTime($this->datetime_added))->format('Y-m-d H:i:s');
        }

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions

        if ($this->id_category == -1) {
            $query->andWhere([
                'id_category' => null
            ]);
        }
        else {
            $query->andFilterWhere([
                'id_category' => $this->id_category,
            ]);
        }

        $query->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'author_name', $this->author_name])
            ->andFilterWhere(['like', 'author_mail', $this->author_mail])
            ->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answer', $this->answer]);

        if ($createdFrom > 0 && $createdTo > 0) {
            $query->andFilterWhere(
                ['between', 'datetime_added', $createdFrom, $createdTo]
            );
        }

        switch ($type) {
            case 'new' : {
                $query->andFilterWhere([
                    'state' => Question::STATE_DRAFT,
                    'is_blocked' => 0,
                ]);
                break;
            }
            case 'blocked' : {
                $query->andFilterWhere([
                    'is_blocked' => 1,
                ]);
                break;
            }
            default : {
                $query->andFilterWhere([
                    'is_blocked' => 0,
                ]);
                $query->andFilterWhere(['in', 'state', [Question::STATE_PUBLISHED, Question::STATE_HIDDEN]]);
                break;
            }
        }

        return $dataProvider;
    }
}
