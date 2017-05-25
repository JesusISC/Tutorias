<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "especialidades".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Carreras[] $carreras
 */
class Especialidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'especialidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras()
    {
        return $this->hasMany(Carreras::className(), ['nombre' => 'id']);
    }
    public static function getAll(){
        $especialidades[] = 'Seleccione la especialidad';
        
        foreach (Carreras:: find()->all() as $registro) {
            $especialidades[$registro->id] = $registro->nombre;
            
        }
        
        return $especialidades;
}
}
