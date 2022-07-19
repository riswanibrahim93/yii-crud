<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Nama</label>: <?= Html::encode($model->nama) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>