<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Predictions;

/**
 * PredictionsSearch represents the model behind the search form of `\app\models\Predictions`.
 */
class PredictionsSearch extends Predictions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'league_id', 'home_team_score', 'away_team_score', 'prediction_home_team', 'prediction_draw', 'prediction_away_team'], 'integer'],
            [['home_team', 'away_team', 'match_date', 'current_status', 'crawled_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
    public function search($params)
    {
        $query = Predictions::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params,'');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'league_id' => $this->league_id,
            'home_team_score' => $this->home_team_score,
            'away_team_score' => $this->away_team_score,
            'prediction_home_team' => $this->prediction_home_team,
            'prediction_draw' => $this->prediction_draw,
            'prediction_away_team' => $this->prediction_away_team,
            'crawled_at' => $this->crawled_at,
        ]);

        $query->andFilterWhere(['like', 'home_team', $this->home_team])
            ->andFilterWhere(['like', 'away_team', $this->away_team])
            ->andFilterWhere(['like', 'match_date', $this->match_date])
            ->andFilterWhere(['like', 'current_status', $this->current_status]);

        return $dataProvider;
    }
}
