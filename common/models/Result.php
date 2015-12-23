<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Result
 */
class Result extends Model
{
    public static function tableName()
    {
        return 'result';
    }

    public function rules()
    {
        return [
            [['idQuestion','idTest','result','numberCorrectAnswer','numberWrongAnswer'], 'integer'],
            [['idQuestion','idTest','result','numberCorrectAnswer','numberWrongAnswer'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idQuestion' => 'QUESTION ID',
            'idTest' => 'TEST ID',
            'result' => 'RESULT',
            'numberCorrectAnswer' => 'CORRECT ANSWER NUMBER',
            'numberWrongAnswer' => 'WRONG ANSWER NUMBER',
        ];
    }
}

