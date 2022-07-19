<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TabelSkala */

$this->title = 'Create Tabel Skala';
$this->params['breadcrumbs'][] = ['label' => 'Tabel Skalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-skala-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
