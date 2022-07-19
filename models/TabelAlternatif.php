<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabel_alternatif".
 *
 * @property int $id
 * @property string $alternatif
 * @property int $flavor
 * @property int $body
 * @property int $sweetness
 * @property int $acidity
 * @property int $aftertaste
 * @property int $harga
 */
class TabelAlternatif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabel_alternatif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alternatif', 'flavor', 'body', 'sweetness', 'acidity', 'aftertaste', 'harga'], 'required'],
            [['flavor', 'body', 'sweetness', 'acidity', 'aftertaste', 'harga'], 'integer'],
            [['alternatif'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alternatif' => 'Alternatif',
            'flavor' => 'Flavor',
            'body' => 'Body',
            'sweetness' => 'Sweetness',
            'acidity' => 'Acidity',
            'aftertaste' => 'Aftertaste',
            'harga' => 'Harga',
        ];
    }

    public function getSkala()
{
    return $this->hasOne(TabelSkala::className(), ['id' => 'flavor']);
}
}
