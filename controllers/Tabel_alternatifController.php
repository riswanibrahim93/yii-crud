<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Tabel_alternatif;

class Tabel_alternatifController extends Controller
{
    public function actionIndex()
    {
        $query = Tabel_alternatif::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $alternatifs = $query->orderBy('alternatif')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'alternatifs' => $alternatifs,
            'pagination' => $pagination,
        ]);
    }
}