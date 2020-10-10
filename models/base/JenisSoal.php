<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "master_jenis_soal".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $flag
 *
 * @property \app\models\PelatihanSoalJenis[] $pelatihanSoalJenis
 * @property string $aliasModel
 */
abstract class JenisSoal extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_jenis_soal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['flag'], 'integer'],
            [['nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'flag' => 'Flag',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'nama' => 'jenis soal , ex : pre test , post test',
            'flag' => '0 = deleted, 1 = active',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelatihanSoalJenis()
    {
        return $this->hasMany(\app\models\PelatihanSoalJenis::className(), ['jenis_id' => 'id']);
    }




}
