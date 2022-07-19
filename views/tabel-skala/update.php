<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TabelSkala */

$this->title = 'Update Tabel Skala: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tabel Skalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabel-skala-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
