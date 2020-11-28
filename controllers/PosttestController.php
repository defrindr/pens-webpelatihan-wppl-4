<?php
namespace app\controllers;

use app\models\PelatihanPeserta;
use app\models\LoginPesertaForm;
use app\models\Pelatihan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Yii;

class PosttestController extends Controller {
    // public function 


    public function actionIndex($unique_id = null){
        $this->layout  =  '../layouts-peserta/not-found';
        if($unique_id == null) return $this->render('not-found');
        $model = Pelatihan::find()->where(['unique_id' => $unique_id])->one();
        if($model == [])  return $this->render('not-found');
        if(!isset(\Yii::$app->user->identity)) return $this->redirect(['/site/login']);
        $jenis_soal = $model->getPelatihanSoalJenis()->where(['jenis_id' => 2])->one();
        if($jenis_soal == []) return $this->render('not-found',[
            'error' => 'Soal belum tersedia'
        ]);
        $soals = $jenis_soal->getPelatihanSoals()->all();


        $this->layout  =  '../layouts-peserta/main';
        return $this->render('template-soal',[
            'soals' => $soals,
            'model' => $model,
        ]);
    }
}