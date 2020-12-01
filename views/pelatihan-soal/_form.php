<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\PelatihanSoal $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
    'id' => 'PelatihanSoal',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error',
]
);
?>

			<?=$form->field($model, 'id')->textInput()?>
			<?=// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
            $form->field($model, 'jenis_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\PelatihanSoalJenis::find()->all(), 'id', 'id'),
                [
                    'prompt' => 'Select',
                    'disabled' => (isset($relAttributes) && isset($relAttributes['jenis_id'])),
                ]
            );?>
			<?=// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
            $form->field($model, 'kategori_soal_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\MasterKategoriSoal::find()->all(), 'id', 'id'),
                [
                    'prompt' => 'Select',
                    'disabled' => (isset($relAttributes) && isset($relAttributes['kategori_soal_id'])),
                ]
            );?>
			<?php //$form->field($model, 'nomor')->textInput()?>
			<?=$form->field($model, 'soal')->textarea(['rows' => 6])?>
			<?=$form->field($model, 'pilihan')->textarea(['rows' => 6])?>
			<?=$form->field($model, 'jawaban')->textarea(['rows' => 6])?>        <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?=Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']);?>
                <?=Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default'])?>
            </div>
        </div>

        <?php ActiveForm::end();?>

    </div>
</div>