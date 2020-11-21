<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\PelatihanSoalJenis $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
                'id' => 'PelatihanSoalJenis',
                'layout' => 'horizontal',
                'enableClientValidation' => true,
                'errorSummaryCssClass' => 'error-summary alert alert-error',
            ]
            );
            ?>

			<?php //$form->field($model, 'id')->textInput()?>
			<?=// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
            $form->field($model, 'jenis_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\MasterJenisSoal::find()->all(), 'id', 'nama'),
                [
                    'prompt' => 'Select',
                    'disabled' => (isset($relAttributes) && isset($relAttributes['jenis_id'])),
                ]
            );?>
			<?=// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
            $form->field($model, 'pelatihan_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\Pelatihan::find()->all(), 'id', 'nama'),
                [
                    'prompt' => 'Select',
                    'disabled' => (isset($relAttributes) && isset($relAttributes['pelatihan_id'])),
                ]
            );?>
			<?=$form->field($model, 'waktu_pengerjaan')->textInput()?>
			<?=$form->field($model, 'jumlah_soal')->textInput()?>        <hr/>
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