<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use app\components\mazer\Tabs;

/**
 * @var yii\web\View $this
 * @var app\models\Instansi $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Instansi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Instansis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud instansi-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
                '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
                ['update', 'id' => $model->id],
                ['class' => 'btn btn-info']
            ) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
                . 'Full list', ['index'], ['class' => 'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('app\models\Instansi'); ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            // 'flag',
        ],
    ]); ?>


    <hr />

    <?= Html::a(
        '<span class="glyphicon glyphicon-trash"></span> ' . 'Delete',
        ['delete', 'id' => $model->id],
        [
            'class' => 'btn btn-danger',
            'data-confirm' => '' . 'Are you sure to delete this item?' . '',
            'data-method' => 'post',
        ]
    ); ?>
    <?php $this->endBlock() ?>


    <?= Tabs::widget(
        [
            'id' => 'relation-tabs',
            'encodeLabels' => false,
            'items' => [
                [
                    'label'   => '<b class=""># ' . Html::encode($model->id) . '</b>',
                    'content' => $this->blocks['app\models\Instansi'],
                    'active'  => true,
                ],
            ]
        ]
    );
    ?>
</div>