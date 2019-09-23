<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leagues".
 *
 * @property int $league_id
 * @property int $country
 * @property string $tournament
 *
 * @property Countries $country0
 * @property Predictions[] $predictions
 */
class Leagues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leagues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'tournament'], 'required'],
            [['country'], 'integer'],
            [['tournament'], 'string', 'max' => 100],
            [['country', 'tournament'], 'unique', 'targetAttribute' => ['country', 'tournament']],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'league_id' => 'League ID',
            'country' => 'Country',
            'tournament' => 'Tournament',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPredictions()
    {
        return $this->hasMany(Predictions::className(), ['league_id' => 'league_id']);
    }
}
