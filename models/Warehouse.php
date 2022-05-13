<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property int $id_warehouse
 * @property string $warehouse
 * @property string $tempat
 * @property string $alamat
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse', 'tempat', 'alamat'], 'required'],
            [['warehouse'], 'string', 'max' => 255],
            [['tempat', 'alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_warehouse' => 'Id Warehouse',
            'warehouse' => 'Warehouse',
            'tempat' => 'Tempat',
            'alamat' => 'Alamat',
        ];
    }
}
