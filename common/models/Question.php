<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Question
 */
class Question extends Model
{
    public static function tableName()
    {
        return 'question';
    }

    public function rules()
    {
        return [
            [['idQuestion','idTest','correctAnswer','wrongAnswer'], 'integer'],
            [['idQuestion','idTest','correctAnswer','wrongAnswer'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idQuestion' => 'QUESTION ID',
            'idTest' => 'TEST ID',
            'correctAnswer' => 'CORRECT ANSWER',
            'wrongAnswer' => 'WRONG ANSWER',
        ];
    }
}


