<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Test
 */
class Test extends Model
{
    public static function tableName()
    {
        return 'test';
    }

    public function rules()
    {
        return [
            [['idQuestion','idTest'], 'integer'],
            [['idQuestion','idTest'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idQuestion' => 'QUESTION ID',
            'idTest' => 'TEST ID',
        ];
    }
}