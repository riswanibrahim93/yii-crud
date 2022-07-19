<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Kopi Arabika</h1>
<ul>
<?php foreach ($alternatifs as $alternatif): ?>
    <li>
        <?= Html::encode("{$alternatif->id} ({$alternatif->alternatif})") ?>:
        <?= $alternatif->harga ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>