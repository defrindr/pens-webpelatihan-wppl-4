<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "pelatihan_soal_peserta_jawaban".
 *
 * @property integer $id
 * @property integer $peserta_id
 * @property integer $soal_id
 * @property string $jawaban
 * @property integer $nilai
 *
 * @property \app\models\PelatihanSoal $soal
 * @property \app\models\PelatihanSoalPeserta $peserta
 * @property string $aliasModel
 */
abstract class PelatihanSoalPesertaJawaban extends \yii\db\ActiveRecord
{

    public $nilai_max = null;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelatihan_soal_peserta_jawaban';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peserta_id', 'soal_id', 'jawaban'], 'required'],
            [['peserta_id', 'soal_id', 'nilai'], 'integer'],
            ['nilai', 'integer', 'max' => $this->nilai_max],
            [['jawaban'], 'string'],
            [['soal_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\PelatihanSoal::className(), 'targetAttribute' => ['soal_id' => 'id']],
            [['peserta_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\PelatihanSoalPeserta::className(), 'targetAttribute' => ['peserta_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'peserta_id' => 'Peserta ID',
            'soal_id' => 'Soal ID',
            'jawaban' => 'Jawaban',
            'nilai' => 'Nilai',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'jawaban' => 'jawaban peserta',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoal()
    {
        return $this->hasOne(\app\models\PelatihanSoal::className(), ['id' => 'soal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeserta()
    {
        return $this->hasOne(\app\models\PelatihanSoalPeserta::className(), ['id' => 'peserta_id']);
    }




}
