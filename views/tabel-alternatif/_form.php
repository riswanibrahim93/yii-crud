<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TabelAlternatif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabel-alternatif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alternatif')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'flavor')->textInput() ?>

    <?php 

    $dataPost=ArrayHelper::map(\app\models\TabelSkala::find()->asArray()->all(), 'id', 'keterangan');
    echo $form->field($model, 'flavor')
        ->dropDownList(
            $dataPost,           
            ['id'=>'keterangan']
        );

     ?>

    <?php //= $form->field($model, 'body')->textInput() ?>

    <?php 

    echo $form->field($model, 'body')->dropDownList(
        ['Sangat Tipis', 'Tipis', 'Cukup', 'Kuat', 'Sangat Kuat'],
        [1,2,3,4,5]
    );

     ?>

    <?= $form->field($model, 'sweetness')->textInput() ?>

    <?= $form->field($model, 'acidity')->textInput() ?>

    <?= $form->field($model, 'aftertaste')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
