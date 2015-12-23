<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
/**
 * Glosar controller
 */
class GlosarController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Displays glosar page.
     *
     * @return mixed
     */
    public function actionGlosar()
    {
        return $this->render('glosar');
    }
}