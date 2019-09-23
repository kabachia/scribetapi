<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "predictions".
 *
 * @property int $id
 * @property int $league_id
 * @property string $home_team
 * @property string $away_team
 * @property string $match_date
 * @property string $current_status
 * @property int $home_team_score
 * @property int $away_team_score
 * @property int $prediction_home_team
 * @property int $prediction_draw
 * @property int $prediction_away_team
 * @property string $crawled_at
 *
 * @property Leagues $league
 */
class Predictions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'predictions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['league_id', 'home_team_score', 'away_team_score', 'prediction_home_team', 'prediction_draw', 'prediction_away_team'], 'integer'],
            [['crawled_at'], 'safe'],
            [['home_team', 'away_team', 'match_date'], 'string', 'max' => 100],
            [['current_status'], 'string', 'max' => 10],
            [['league_id'], 'exist', 'skipOnError' => true, 'targetClass' => Leagues::className(), 'targetAttribute' => ['league_id' => 'league_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_id' => 'League ID',
            'home_team' => 'Home Team',
            'away_team' => 'Away Team',
            'match_date' => 'Match Date',
            'current_status' => 'Current Status',
            'home_team_score' => 'Home Team Score',
            'away_team_score' => 'Away Team Score',
            'prediction_home_team' => 'Prediction Home Team',
            'prediction_draw' => 'Prediction Draw',
            'prediction_away_team' => 'Prediction Away Team',
            'crawled_at' => 'Crawled At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeague()
    {
        return $this->hasOne(Leagues::className(), ['league_id' => 'league_id']);
    }
}
