<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TabelAlternatif */

$this->title = 'Create Tabel Alternatif';
$this->params['breadcrumbs'][] = ['label' => 'Tabel Alternatifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabel-alternatif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
