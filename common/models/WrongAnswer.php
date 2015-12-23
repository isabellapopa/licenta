<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Wrong Answer
 */
class WrongAnswer extends Model
{

    public static function tableName()
    {
        return 'wrongQuestion';
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