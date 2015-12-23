<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 *Correct Answer
 */
class CorrectAnswer extends Model
{
    public static function tableName()
    {
        return 'correctQuestion';
    }

    public function rules()
    {
        return [
            [['idQuestion','idUser'], 'integer'],
            [['idQuestion','idUser'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idQuestion' => 'QUESTION ID',
            'idUser' => 'USER ID',
        ];
    }
}
