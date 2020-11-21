<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "pelatihan_tingkat".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $flag
 *
 * @property \app\models\Pelatihan[] $pelatihans
 * @property string $aliasModel
 */
abstract class PelatihanTingkat extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelatihan_tingkat';
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
            'nama' => 'Nama tingkat pelatihan, ex : pelatihan dasar, pelatihan menengah',
            'flag' => '0 = deleted, 1 = active',
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelatihans()
    {
        return $this->hasMany(\app\models\Pelatihan::className(), ['tingkat_id' => 'id']);
    }




}
