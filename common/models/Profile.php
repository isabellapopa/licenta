<?php
namespace common\models;

    use Yii;
    use yii\base\Model;

    /**
     * Profile
     */
class Profile extends Model
{
    public static function tableProfile()
    {
        return 'profile';
    }

    public function rules()
    {
        return [
            [['idUser','idTest','result'], 'integer'],
            [['idUser','idTest','result'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'idUser' => 'USER ID',
            'idTest' => 'TEST ID',
            'result' => 'RESULT',
        ];
    }
}