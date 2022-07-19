<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TabelAlternatifSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabel-alternatif-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alternatif') ?>

    <?= $form->field($model, 'flavor') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'sweetness') ?>

    <?php // echo $form->field($model, 'acidity') ?>

    <?php // echo $form->field($model, 'aftertaste') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
